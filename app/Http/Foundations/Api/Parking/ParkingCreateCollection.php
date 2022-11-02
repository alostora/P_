<?php

namespace App\Http\Foundations\Api\Parking;

use App\Models\Parking;

class ParkingCreateCollection
{
    public static function createParking($request)
    {
        $data = $request->validated();
        $data['saies_id'] = auth()->guard('api')->id();
        $data['garage_id'] = auth()->guard('api')->user()->garage->garage_id;

        return  Parking::create($data);
    }
}
