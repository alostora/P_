<?php

namespace App\Http\Foundations\Admins\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminCreateCollection
{
    public static function createAdmin($request)
    {
        $validated = $request->validated();

        $validated['password'] = Hash::make($validated['password']);
        $validated['type'] = 0;

        User::create($validated);
    }
}
