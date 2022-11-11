<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Garage extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameAr',
        'nameEn',
        'longitude',
        'latitude',
        'status', //[available ,notavalable]
        'street_id',
        'country_id',
        'governorate_id',
        'city_id',
        'area_id',
        'hourCost',
        'carCount',
    ];

    
    public function saies():HasOne
    {
        return $this->hasOne(GarageKeeper::class,'garage_id');
    }
    
    public function manySaies():HasMany
    {
        return $this->hasMany(GarageKeeper::class,'garage_id');
    }
}
