<?php

namespace App\Http\Foundations\Admins\Countries\Street;

use App\Constants\Admin\CountryTyps;
use App\Models\Country;

class StreetCreateCollection
{
    public static function createStreet($request)
    {
        $validated = $request->validated();

        $validated['type'] = CountryTyps::STREET['code'];

        Country::create($validated);
    }
}
