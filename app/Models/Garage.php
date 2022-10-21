<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameAr',
        'nameEn',
        'lang',
        'lat',
        'status', //[available ,notavalable]
        'street_id',
        'country_id',
        'governorate_id',
        'city_id',
        'area_id',
        'hourCost',
        'carCount',
    ];
}
