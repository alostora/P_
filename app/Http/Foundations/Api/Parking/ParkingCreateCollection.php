<?php

namespace App\Http\Foundations\Api\Parking;

use App\Models\Parking;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ParkingCreateCollection
{
    public static function createParking($request)
    {
        return DB::transaction(function () use ($request) {
            $user = auth()->guard('api')->user();

            // Get all used codes
            $usedCodes = Parking::whereBetween('code', [10000, 45000])
                ->pluck('code')
                ->toArray();

            // Find next available code
            $code = 10000;
            while (in_array($code, $usedCodes) && $code < 45000) {
                $code++;
            }

            // Reset if all codes are used
            if ($code > 45000) {
                $code = 10000;
            }

            $data = $request->validated();
            $data['saies_id'] = $user->id;
            $data['garage_id'] = $user->garage->garage_id;
            $data['code'] = $code;
            $data['starts_at'] = Carbon::now();
            $data['hourCost'] = $user->garage->garage->hourCost;

            return Parking::create($data);
        });
    }
}
