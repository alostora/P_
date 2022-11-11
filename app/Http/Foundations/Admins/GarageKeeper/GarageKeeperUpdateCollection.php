<?php

namespace App\Http\Foundations\Admins\GarageKeeper;

use App\Models\GarageKeeper;
use Illuminate\Support\Facades\Hash;


class GarageKeeperUpdateCollection
{
    public static function updateGarageKeeper($request, $user)
    {
        $validated = $request->except('confirmPassword','garage_id');

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($request->password);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        GarageKeeper::where([
            'saies_id'=>$user->id,
        ])->update([
            'garage_id'=>$request->garage_id,
        ]);
    }
}
