<?php

namespace App\Http\Foundations\Admins\Admin;

use Illuminate\Support\Facades\Hash;


class AdminUpdateCollection
{
    public static function updateAdmin($request, $user)
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
