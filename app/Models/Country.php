<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameAr',
        'nameEn',
        'longitude',
        'latitude',
        'type', //[country,governorate,city,area,street]
        'country_id',
        'governorate_id',
        'city_id',
        'area_id',
    ];
}
