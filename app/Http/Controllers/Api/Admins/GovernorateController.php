<?php

namespace App\Http\Controllers\Api\Admins;

use App\Constants\Admin\CountryTyps;
use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Governorates\GovernorateResource;
use App\Models\Country;

class GovernorateController extends Controller
{

    public function index(Country $country)
    {
        $governorates = Country::where('country_id', $country->id)
            ->where('type', CountryTyps::GOVERNORATE['code'])
            ->paginate(25);

        return GovernorateResource::collection($governorates);
    }

    public function show(Country $country)
    {
        return new GovernorateResource($country);
    }
}
