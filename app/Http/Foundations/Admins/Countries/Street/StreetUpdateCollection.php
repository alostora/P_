<?php

namespace App\Http\Foundations\Admins\Countries\Street;


class StreetUpdateCollection
{
    public static function updateStreet($request, $Country)
    {
        $validated = $request->validated();

        $Country->update($validated);
    }
}
