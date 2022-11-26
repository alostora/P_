<?php

namespace App\Http\Foundations\Api\Parking;

use App\Models\Parking;
use App\Models\User;
use Carbon\Carbon;

class ParkingCreateCollection
{
    public static function createParking($request)
    {
        $data = $request->validated();

        $data['saies_id'] = auth()->guard('api')->id();

        $data['garage_id'] = auth()->guard('api')->user()->garage->garage_id;

        $data['code'] = rand(10000,45000);

        Parking::where('code',$data['code'])->update(['code'=>null]);

        $data['starts_at'] = Carbon::now();

        $data['hourCost'] = auth()->guard('api')->user()->garage->garage->hourCost;

        return  Parking::create($data);
    }
}
