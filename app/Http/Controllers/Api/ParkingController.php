<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Foundations\Api\Parking\ParkingCreateCollection;
use App\Http\Requests\Api\ParkingCreateRequest;
use App\Http\Resources\Api\ParkingResource;
use App\Models\Garage;
use App\Models\Parking;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function index(Garage $garage){


        $parkedCars = Parking::where('garage_id',$garage->id)->get();

        $data = [
            'success' => true,
            'message' => trans('garage.parked_cars_retirved_successfully'),
            'data' => ParkingResource::collection($parkedCars),
        ];
        return  response()->json($data, 200);

    }

    public function store(ParkingCreateRequest $request){
        
        $parking = ParkingCreateCollection::createParking($request);
        
        $data = [
            'success' => true,
            'message' => trans('garage.parked_cars_created_successfully'),
            'data' => new ParkingResource($parking),
        ];

        return  response()->json($data, 200);

    }

}
