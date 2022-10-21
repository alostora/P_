<?php

namespace App\Http\Foundations\Admins\GarageKeeper;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class GarageKeeperCreateCollection
{
    public static function createGarageKeeper($request)
    {
        $validated = $request->validated();

        $validated['password'] = Hash::make($validated['password']);
        $validated['admin_id'] = auth()->id();
        $validated['type'] = 2;

        User::create($validated);
    }
}
