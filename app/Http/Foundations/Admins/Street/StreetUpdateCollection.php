<?php

namespace App\Http\Foundations\Admins\Street;


class StreetUpdateCollection
{
    public static function updateStreet($request, $Country)
    {
        $validated = $request->validated();

        $Country->update($validated);
    }
}
