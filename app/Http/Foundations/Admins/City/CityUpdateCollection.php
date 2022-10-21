<?php

namespace App\Http\Foundations\Admins\City;


class CityUpdateCollection
{
    public static function updateCity($request, $Country)
    {
        $validated = $request->validated();

        $Country->update($validated);
    }
}
