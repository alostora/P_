<?php

namespace App\Http\Foundations\Admins\Countries\City;

use App\Constants\Admin\CountryTyps;
use App\Models\Country;

class CityCreateCollection
{
    public static function createCity($request)
    {
        $validated = $request->validated();

        $validated['type'] = CountryTyps::CITY['code'];

        Country::create($validated);
    }
}
