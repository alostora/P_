<?php

namespace App\Http\Foundations\Admins\City;

use App\Models\Country;

class CityCreateCollection
{
    public static function createCity($request)
    {
        $validated = $request->validated();

        $validated['type'] = 2;

        Country::create($validated);
    }
}
