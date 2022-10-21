<?php

namespace App\Http\Foundations\Admins\Garage;

use App\Models\Country;
use App\Models\Garage;

class GarageCreateCollection
{
    public static function createGarage($request)
    {
        $validated = $request->validated();

        Garage::create($validated);
    }
}
