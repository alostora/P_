<?php

namespace App\Http\Foundations\Admins\Countries\City;


class CityUpdateCollection
{
    public static function updateCity($request, $Country)
    {
        $validated = $request->validated();

        $Country->update($validated);
    }
}
