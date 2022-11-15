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
        'name' => "valet parking",
        'name_ar' => "valet parking",
        'price' => 175,
    ];

    public const VIP_RKING = [
        'code' => 1,
        'prefix' => "VIP_RKING",
        'name' => "vip parking",
        'name_ar' => "vip parking",
        'price' => 350,
    ];
    
    public const PER_HOUR = [
        'code' => 2,
        'prefix' => "PER_HOUR",
        'name' => "per hour",
        'name_ar' => "per hour",
        'price' => 0,
    ];
}
