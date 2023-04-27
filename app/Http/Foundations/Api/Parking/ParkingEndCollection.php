<?php

namespace App\Http\Foundations\Api\Parking;

use App\Constants\Api\ParkingTypes;
use App\Models\Parking;
use Carbon\Carbon;

class ParkingEndCollection
{
    public static function endParking($parkingCode)
    {

        $parking = Parking::where('code', $parkingCode)->where('ends_at', null)->latest()->first();

        $parking = !empty($parking) ? $parking : Parking::where('ends_at', null)->where('id', $parkingCode)->first();

        if (!empty($parking)) {

            $parking = self::calckParkedHoursAndEndPark($parking);

        }

        return $parking;
    }

    public static function calckParkedHoursAndEndPark(Parking $parking)
    {

        $parking->ends_at = Carbon::now();

        $start  = new Carbon($parking->starts_at);

        $end  = new Carbon($parking->ends_at);

        $minutes = $start->diff($end)->format('%I');

        $hours = $start->diffInHours($end);

        $hours = $minutes > 0 ? $start->diffInHours($end) + 1 : $hours;

        if ($minutes > 0 && $hours > 0) {

            $hours = $start->diffInHours($end) + 1;
        } elseif ($hours == 0) {

            $hours = 1;
        }

        //calc free hours
        if ($parking->garage->freeHours) {
            $hours = ceil($hours - $parking->garage->freeHours);
            if ($hours <= 0) {
                $hours = 0;
            }
        }
        
        $user = auth()->guard('api')->user();

        if ($parking->type == ParkingTypes::PER_HOUR['code']) {
            $parking->cost = $hours * $user->garage->garage->hourCost;
        }

        if ($parking->type == ParkingTypes::VALET_PARKING['code']) {
            $parking->cost = $user->garage->garage->valetCost;
        }

        if ($parking->type == ParkingTypes::VIP_PARKING['code']) {
            $parking->cost = $user->garage->garage->vipCost;
        }

        if ($parking->type == ParkingTypes::FINE_PARKING['code']) {
            $parking->cost = $user->garage->garage->fineCost;
        }

        $parking->status = true;

        $parking->saies_id = $user->id;

        $parking->save();

        return $parking;
    }
}
