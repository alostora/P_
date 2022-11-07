<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ParkingResource;
use App\Models\Parking;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    
    public function index()
    {
        $parking = Parking::get();
        $parking = ParkingResource::collection($parking);


        return view('Admin.Parking.index', compact('parking'));
    }
}
