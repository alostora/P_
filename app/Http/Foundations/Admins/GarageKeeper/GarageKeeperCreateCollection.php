<?php

namespace App\Http\Foundations\Admins\GarageKeeper;

use App\Constants\UserTyps;
use App\Models\GarageKeeper;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class GarageKeeperCreateCollection
{
    public static function createGarageKeeper($request)
    {
        $validated = $request->except('garage_id');

        $validated['password'] = Hash::make($validated['password']);
        $validated['admin_id'] = auth()->id();
        $validated['type'] = UserTyps::SAIES['code'];

        $user = User::create($validated);

        GarageKeeper::create([
            'saies_id'=>$user->id,
            'garage_id'=>$request->garage_id,
        ]);
    }
}
