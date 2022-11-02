<?php

namespace App\Http\Foundations\Admins\Garage;


class GarageUpdateCollection
{
    public static function updateGarage($request, $garage)
    {
        $validated = $request->except('saies_id');

        $garage->saies()->update([
            "garage_id" => $garage->id,
            "saies_id" => $request->saies_id
        ]);
        
        $garage->update($validated);
    }
}
