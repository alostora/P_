<?php

namespace App\Http\Foundations\Api\Parking;

use App\Constants\Api\ParkingTypes;
use App\Models\Parking;
use Carbon\Carbon;

class ParkingEndCollection
{
    public static function endParking($parkingCode)
    {
        $parking = Parking::where('code', $parkingCode)->whereNull('ends_at')->whereNull('status')->latest()->first();

        if (!$parking) {

            return false;
        }

        if ($parking) {
            $parking = self::calcParkedHoursAndEndPark($parking);
        }

        return $parking;
    }

    public static function calcParkedHoursAndEndPark(Parking $parking)
    {
        $parking->ends_at = Carbon::now();

        $totalMinutes = $parking->starts_at->diffInMinutes($parking->ends_at);

        // Calculate hours: free if <= 5 min, otherwise charge
        if ($totalMinutes <= 5) {
            $hours = 0;
        } else {
            $hours = floor($totalMinutes / 60);
            if ($totalMinutes % 60 > 5) {
                $hours++;
            }
            if ($hours == 0) {
                $hours = 1;
            }
        }

        // Apply free hours discount
        if ($parking->garage->freeHours > 0 && $hours > 0) {
            $hours = max(0, $hours - $parking->garage->freeHours);
        }

        $user = auth()->guard('api')->user();

        // Calculate cost
        $cost = 0;
        if ($parking->type == ParkingTypes::PER_HOUR['code']) {
            $cost = $hours * $user->garage->garage->hourCost;
        } elseif ($parking->type == ParkingTypes::VALET_PARKING['code']) {
            $cost = $user->garage->garage->valetCost;
        } elseif ($parking->type == ParkingTypes::VIP_PARKING['code']) {
            $cost = $user->garage->garage->vipCost;
        } elseif ($parking->type == ParkingTypes::FINE_PARKING['code']) {
            $cost = $user->garage->garage->fineCost;
        }

        $parking->cost = $cost;
        $parking->status = true;
        $parking->save();

        return $parking;
    }
}
