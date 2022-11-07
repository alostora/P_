<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\GarageKeeper\GarageKeeperCreateCollection;
use App\Http\Foundations\Admins\GarageKeeper\GarageKeeperUpdateCollection;
use App\Http\Requests\GarageKeeper\GarageKeeperCreateRequest;
use App\Http\Requests\GarageKeeper\GarageKeeperUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class GarageKeeperController extends Controller
{

    public function index()
    {
        $garageKeepers = User::where('type', 2)->get();

        $garageKeepers = UserResource::collection($garageKeepers);

        return view('Admin.GarageKeeper.index', compact('garageKeepers'));
    }

    public function show(User $user)
    {
        return $user;
    }

    public function create()
    {
        return view('Admin.GarageKeeper.create');
    }

    public function store(GarageKeeperCreateRequest $request)
    {
        GarageKeeperCreateCollection::createGarageKeeper($request);

        session()->flash('success', 'garage keeper created successfully');

        return redirect(url('admin/garage-keepers'));
    }

    public function edit(User $user)
    {
        $garageKeepers = new UserResource($user);

        return view('Admin.GarageKeeper.edit', compact('user'));
    }

    public function update(GarageKeeperUpdateRequest $request, User $user)
    {
        GarageKeeperUpdateCollection::updateGarageKeeper($request, $user);

        session()->flash('success', 'admin updated successfully');

        return redirect(url('admin/garage-keepers'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('success', 'admin deleted successfully');
        
        return back();
    }
}
