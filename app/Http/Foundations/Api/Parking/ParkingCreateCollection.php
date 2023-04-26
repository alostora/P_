<?php

namespace App\Http\Foundations\Api\Parking;

use App\Models\Parking;
use App\Models\User;
use Carbon\Carbon;

class ParkingCreateCollection
{
    public static function createParking($request)
    {

        $code = 10000;

        $parking = Parking::latest()->first();

        if($parking && $parking->code <= 45000){
            $code = $parking->code + 1;
        }

        $data = $request->validated();

        $data['saies_id'] = auth()->guard('api')->id();

        $data['garage_id'] = auth()->guard('api')->user()->garage->garage_id;

        $data['code'] = $code;

        $data['starts_at'] = Carbon::now();

        $data['hourCost'] = auth()->guard('api')->user()->garage->garage->hourCost;

        return  Parking::create($data);
    }
}
