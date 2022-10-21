<?php

namespace App\Http\Foundations\Admins\Street;

use App\Models\Country;

class StreetCreateCollection
{
    public static function createStreet($request)
    {
        $validated = $request->validated();

        $validated['type'] = 4;

        Country::create($validated);
    }
}
