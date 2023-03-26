<?php

namespace App\Http\Controllers\Api\Admins;

use App\Constants\UserTyps;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserMinifiedResource;
use App\Models\User;

class GarageKeeperController extends Controller
{

    public function index()
    {
        $garageKeepers = User::where('type', UserTyps::SAIES['code'])->paginate(25);

        return UserMinifiedResource::collection($garageKeepers);
    }

    public function show(User $user)
    {
        return new UserMinifiedResource($user);
    }
}
