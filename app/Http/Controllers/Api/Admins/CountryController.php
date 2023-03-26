<?php

namespace App\Http\Controllers\Api\Admins;

use App\Constants\Admin\CountryTyps;
use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\Countries\Country\CountryCreateCollection;
use App\Http\Foundations\Admins\Countries\Country\CountryUpdateCollection;
use App\Http\Requests\Countries\Country\CountryCreateRequest;
use App\Http\Requests\Countries\Country\CountryUpdateRequest;
use App\Http\Resources\Admin\Countries\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function index()
    {
        $countries = Country::where('type', CountryTyps::COUNTRY['code'])->paginate(25);

        return CountryResource::collection($countries);
    }

    public function show(Country $country)
    {
        return new CountryResource($country);
    }
}
