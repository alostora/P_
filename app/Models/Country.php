<?php

namespace App\Models;

use App\Constants\Admin\CountryTyps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function governorates():HasMany
    {
        return $this->hasMany(Country::class,'country_id')->where('type',CountryTyps::GOVERNORATE['code']);
    }
    
    public function cities():HasMany
    {
        return $this->hasMany(Country::class,'governorate_id')->where('type',CountryTyps::CITY['code']);
    }
   
    public function areas():HasMany
    {
        return $this->hasMany(Country::class,'city_id')->where('type',CountryTyps::AREA['code']);
    }
    
    public function streets():HasMany
    {
        return $this->hasMany(Country::class,'area_id')->where('type',CountryTyps::STREET['code']);
    }
}
