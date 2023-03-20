<?php

namespace App\Http\Controllers\Api\Admins;

use App\Constants\Admin\CountryTyps;
use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\Countries\City\CityCreateCollection;
use App\Http\Foundations\Admins\Countries\City\CityUpdateCollection;
use App\Http\Requests\Countries\City\CityCreateRequest;
use App\Http\Requests\Countries\City\CityUpdateRequest;
use App\Http\Resources\Admin\City\CityResource;
use App\Models\Country;

class CityController extends Controller
{

    public function index(Country $country)
    {
        $cities = Country::where('governorate_id',$country->id)->where('type', CountryTyps::CITY['code'])->get();

        $cities = CityResource::collection($cities);

        return $cities;
    }

    public function show(Country $country)
    {
        return $country;
    }
}
