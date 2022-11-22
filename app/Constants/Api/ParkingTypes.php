<?php

namespace App\Constants\Api;

class ParkingTypes
{

    public const TYPE_LIST = [

        0 => ParkingTypes::VALET_PARKING,
        1 => ParkingTypes::VIP_PARKING,
        2 => ParkingTypes::PER_HOUR,
        3 => ParkingTypes::FINE_PARKING,
   ];

    public const VALET_PARKING = [
        'code' => 0,
        'prefix' => "VALET_PARKING",
        'name' => "Valet Parking",
        'name_ar' => "Valet Parking",
    ];

    public const VIP_PARKING = [
        'code' => 1,
        'prefix' => "VIP_RKING",
        'name' => "VIP Parking",
        'name_ar' => "VIP Parking",
    ];
    
    public const PER_HOUR = [
        'code' => 2,
        'prefix' => "PER_HOUR",
        'name' => "Per Hour",
        'name_ar' => "Per Hour",
    ];
    
    public const FINE_PARKING = [
        'code' => 3,
        'prefix' => "FINE_PARKING",
        'name' => "Fine Parking",
        'name_ar' => "Fine Parking",
    ];
}
