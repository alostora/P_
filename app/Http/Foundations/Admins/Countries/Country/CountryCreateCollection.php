<?php

namespace App\Http\Foundations\Admins\Countries\Country;

use App\Constants\Admin\CountryTyps;
use App\Models\Country;

class CountryCreateCollection
{
    public static function createCountry($request)
    {
        $validated = $request->validated();

        $validated['type'] = CountryTyps::COUNTRY['code'];

        Country::create($validated);
    }
}
