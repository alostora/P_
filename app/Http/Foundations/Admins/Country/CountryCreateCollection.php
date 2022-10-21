<?php

namespace App\Http\Foundations\Admins\Country;

use App\Models\Country;

class CountryCreateCollection
{
    public static function createCountry($request)
    {
        $validated = $request->validated();

        $validated['type'] = 0;

        Country::create($validated);
    }
}
