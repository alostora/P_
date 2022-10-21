<?php

namespace App\Http\Foundations\Admins\Countries\Area;

use App\Constants\Admin\CountryTyps;
use App\Models\Country;

class AreaCreateCollection
{
    public static function createArea($request)
    {
        $validated = $request->validated();

        $validated['type'] = CountryTyps::AREA['code'];

        Country::create($validated);
    }
}
