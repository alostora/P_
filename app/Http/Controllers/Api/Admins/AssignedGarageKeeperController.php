<?php

namespace App\Http\Controllers\Api\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Garage\GarageKeeperResource;
use App\Models\Garage;

class AssignedGarageKeeperController extends Controller
{
    
    public function index(Garage $garage)
    {
        $data['garageKeepers'] = GarageKeeperResource::collection($garage->manySaies);

        return $data;
    }
}
