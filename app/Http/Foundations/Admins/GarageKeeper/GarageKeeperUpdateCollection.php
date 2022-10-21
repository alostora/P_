<?php

namespace App\Http\Foundations\Admins\GarageKeeper;

use Illuminate\Support\Facades\Hash;


class GarageKeeperUpdateCollection
{
    public static function updateGarageKeeper($request, $user)
    {
        $validated = $request->except('confirmPassword');

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($request->password);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);
    }
}
