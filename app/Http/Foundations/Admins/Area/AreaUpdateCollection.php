<?php

namespace App\Http\Foundations\Admins\Area;


class AreaUpdateCollection
{
    public static function updateArea($request, $Country)
    {
        $validated = $request->validated();

        $Country->update($validated);
    }
}
