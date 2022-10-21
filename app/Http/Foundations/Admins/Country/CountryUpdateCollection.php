<?php

namespace App\Http\Foundations\Admins\Country;


class CountryUpdateCollection
{
    public static function updateCountry($request, $Country)
    {
        $validated = $request->validated();

        $Country->update($validated);
    }
}
