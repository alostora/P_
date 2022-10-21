<?php

namespace App\Http\Foundations\Admins\Countries\Governorate;


class GovernorateUpdateCollection
{
    public static function updateGovernorate($request, $Country)
    {
        $validated = $request->validated();

        $Country->update($validated);
    }
}
