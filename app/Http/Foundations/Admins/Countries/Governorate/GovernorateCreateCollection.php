<?php

namespace App\Http\Foundations\Admins\Countries\Governorate;

use App\Constants\Admin\CountryTyps;
use App\Models\Country;

class GovernorateCreateCollection
{
    public static function createGovernorate($request)
    {
        $validated = $request->validated();

        $validated['type'] = CountryTyps::GOVERNORATE['code'];

        Country::create($validated);
    }
}
