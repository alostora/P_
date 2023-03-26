<?php

namespace App\Http\Controllers\Api\Admins;

use App\Constants\Admin\CountryTyps;
use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Street\StreetResource;
use App\Models\Country;

class StreetController extends Controller
{
    public function index(Country $country)
    {
        $streets = Country::where('area_id', $country->id)->where('type', CountryTyps::STREET['code'])->paginate(25);

        return StreetResource::collection($streets);
    }

    public function show(Country $country)
    {
        return new StreetResource($country);
    }
}
