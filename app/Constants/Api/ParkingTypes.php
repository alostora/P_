<?php

namespace App\Constants\Api;

class ParkingTypes
{

    public const TYPE_LIST = [

        0 => ParkingTypes::VALET_PARKING,
        1 => ParkingTypes::VIP_RKING,
        2 => ParkingTypes::PER_HOUR,
   ];

    public const VALET_PARKING = [
        'code' => 0,
        'prefix' => "VALET_PARKING",
        'name' => "Valet Parking",
        'name_ar' => "Valet Parking",
        'price' => 175,
    ];

    public const VIP_RKING = [
        'code' => 1,
        'prefix' => "VIP_RKING",
        'name' => "VIP Parking",
        'name_ar' => "VIP Parking",
        'price' => 350,
    ];
    
    public const PER_HOUR = [
        'code' => 2,
        'prefix' => "PER_HOUR",
        'name' => "Per Hour",
        'name_ar' => "Per Hour",
        'price' => 0,
    ];
}
