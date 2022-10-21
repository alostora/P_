<?php

namespace App\Http\Foundations\Admins\Countries\Area;


class AreaUpdateCollection
{
    public static function updateArea($request, $Country)
    {
        $validated = $request->validated();

        $Country->update($validated);
    }
}
