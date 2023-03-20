<?php

namespace App\Http\Controllers\Api\Admins;

use App\Constants\UserTyps;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;

class GarageKeeperController extends Controller
{

    public function index()
    {
        $garageKeepers = User::where('type', UserTyps::SAIES['code'])->get();

        $garageKeepers = UserResource::collection($garageKeepers);

        return $garageKeepers;
    }

    public function show(User $user)
    {
        return $user;
    }
}
