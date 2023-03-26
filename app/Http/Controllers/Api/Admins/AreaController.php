<?php

namespace App\Http\Controllers\Api\Admins;

use App\Constants\Admin\CountryTyps;
use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Area\AreaResource;
use App\Models\Country;

class AreaController extends Controller
{

    public function index(Country $country)
    {
        $areas = Country::where('city_id', $country->id)->where('type', CountryTyps::AREA['code'])->paginate(25);

        return AreaResource::collection($areas);
    }

    public function show(Country $country)
    {
        return new AreaResource($country);
    }
}
