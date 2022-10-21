<?php

namespace App\Http\Foundations\Admins\Area;

use App\Models\Country;

class AreaCreateCollection
{
    public static function createArea($request)
    {
        $validated = $request->validated();

        $validated['type'] = 3;

        Country::create($validated);
    }
}
