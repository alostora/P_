<?php

namespace App\Http\Foundations\Admins\Garage;

use App\Models\Garage;

class GarageCreateCollection
{
    public static function createGarage($request)
    {
        $validated = $request->except('saies_id');

        $garage = Garage::create($validated);

        $garage->saies()->create([
            "garage_id" => $garage->id,
            "saies_id" => $request->saies_id
        ]);
    }
}
