<?php

namespace App\Http\Foundations\Admins\Countries\Country;


class CountryUpdateCollection
{
    public static function updateCountry($request, $Country)
    {
        $validated = $request->validated();

        $Country->update($validated);
    }
}
