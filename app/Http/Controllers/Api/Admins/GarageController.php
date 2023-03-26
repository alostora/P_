<?php

namespace App\Http\Controllers\Api\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Garage\GarageResource;
use App\Models\Country;
use App\Models\Garage;

class GarageController extends Controller
{

    public function index(Country $country)
    {
        $garages = Garage::where('street_id', $country->id)->paginate(25);

        return GarageResource::collection($garages);
    }

    public function show(Garage $garage)
    {
        return new GarageResource($garage);
    }
}
