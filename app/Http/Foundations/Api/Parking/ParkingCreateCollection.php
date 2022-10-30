<?php

namespace App\Http\Foundations\Api\Parking;

use App\Models\Parking;

class ParkingCreateCollection
{
    public static function createParking($request)
    {

        $data = $request->validated();
        $data['saies_id'] = auth()->id();
        $data['garage_id'] = auth()->user()->garage_id;

        return  Parking::create($data);
    }
}
