<?php

namespace App\Http\Foundations\Admins\Governorate;


class GovernorateUpdateCollection
{
    public static function updateGovernorate($request, $Country)
    {
        $validated = $request->validated();

        $Country->update($validated);
    }
}
