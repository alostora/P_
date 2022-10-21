<?php

namespace App\Constants\Admin;

class CountryTyps
{

    public const STATUS_LIST = [

        0 => CountryTyps::COUNTRY,
        1 => CountryTyps::GOVERNORATE,
        2 => CountryTyps::CITY,
        3 => CountryTyps::AREA,
        4 => CountryTyps::STREET,
   ];

    public const COUNTRY = [
        'code' => 0,
        'prefix' => "COUNTRY",
        'name' => "Country",
        'name_ar' => "دولة"
    ];
    
    public const GOVERNORATE = [
        'code' => 1,
        'prefix' => "GOVERNORATE",
        'name' => "Governorate",
        'name_ar' => "محافظة"
    ];
    
    public const CITY = [
        'code' => 2,
        'prefix' => "CITY",
        'name' => "City",
        'name_ar' => "مدينة"
    ];
   
    public const AREA = [
        'code' => 3,
        'prefix' => "AREA",
        'name' => "Area",
        'name_ar' => "منطقة"
    ];
    
    public const STREET = [
        'code' => 4,
        'prefix' => "STREET",
        'name' => "Street",
        'name_ar' => "شارع"
    ];
}
