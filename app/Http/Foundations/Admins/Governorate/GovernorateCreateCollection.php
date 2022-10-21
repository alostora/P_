<?php

namespace App\Http\Foundations\Admins\Governorate;

use App\Models\Country;

class GovernorateCreateCollection
{
    public static function createGovernorate($request)
    {
        $validated = $request->validated();

        $validated['type'] = 1;

        Country::create($validated);
    }
}
