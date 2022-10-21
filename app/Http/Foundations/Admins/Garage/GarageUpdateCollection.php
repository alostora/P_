<?php

namespace App\Http\Foundations\Admins\Garage;


class GarageUpdateCollection
{
    public static function updateGarage($request, $Garage)
    {
        $validated = $request->validated();

        $Garage->update($validated);
    }
}
