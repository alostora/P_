<?php

namespace App\Http\Controllers\Api\Admins;

use App\Constants\UserTyps;
use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Garage\GarageResource;
use App\Models\Country;
use App\Models\Garage;
use App\Models\User;

class GarageController extends Controller
{

    public function index(Country $country)
    {
        $garages = Garage::where('street_id',$country->id)->get();
        $garages = GarageResource::collection($garages);

        return $garages;
    }

    public function show(Garage $garage)
    {
        return $garage;
    }
}
