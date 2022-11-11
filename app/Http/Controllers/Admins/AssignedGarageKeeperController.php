<?php

namespace App\Http\Controllers\Admins;

use App\Constants\UserTyps;
use App\Http\Controllers\Controller;
use App\Http\Requests\AssignedGarageKeeper\AssignedGarageKeeperCreateRequest;
use App\Http\Resources\Admin\Garage\GarageKeeperResource;
use App\Models\Garage;
use App\Models\GarageKeeper;
use App\Models\User;
use Illuminate\Http\Request;

class AssignedGarageKeeperController extends Controller
{
    
    public function index(Garage $garage)
    {
        $data['garageKeepers'] = GarageKeeperResource::collection($garage->manySaies);

        return view('Admin.AssignedGarageKeeper.index', $data);
    }

    
    public function create(Garage $garage)
    {
        $data['garage'] = $garage;
        $data['saies'] = User::where('type', UserTyps::SAIES['code'])->get();

        return view('Admin.AssignedGarageKeeper.create', $data);
    }
    
    public function store(AssignedGarageKeeperCreateRequest $request)
    {
        $data = $request->validated();
        GarageKeeper::create($data);
        return redirect('admin/assigned-garage-keeper/'.$data['garage_id']);
    }

    public function destroy(GarageKeeper $garageKeeper)
    {
        $garageKeeper->delete();

        session()->flash('success', 'seller removed from garage successfully');
        
        return back();
    }

}
