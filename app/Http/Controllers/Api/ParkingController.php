<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Foundations\Api\Parking\ParkingCreateCollection;
use App\Http\Foundations\Api\Parking\ParkingEndCollection;
use App\Http\Requests\Api\ParkingCreateRequest;
use App\Http\Resources\Api\ParkingResource;
use App\Models\Garage;
use App\Models\Parking;

class ParkingController extends Controller
{
    public function index(Garage $garage)
    {
        $parkedCars = Parking::where('garage_id', $garage->id)->get();

        $data = [
            'success' => true,
            'message' => trans('garage.parked_cars_retrieved_successfully'),
            'data' => ParkingResource::collection($parkedCars),
        ];
        return  response()->json($data, 200);
    }

    public function store(ParkingCreateRequest $request)
    {
        $parking = ParkingCreateCollection::createParking($request);

        $data = [
            'success' => true,
            'message' => trans('garage.parked_car_created_successfully'),
            'data' => new ParkingResource($parking),
        ];

        return  response()->json($data, 200);
    }

    public function show($parkingCode)
    {
        $parking = Parking::where('code', $parkingCode)->latest()->first();

        $parking = !empty($parking) ? $parking : Parking::find($parkingCode);

        $data = [
            'success' => true,
            'message' => trans('garage.parked_car_retrieved_successfully'),
            'data' => new ParkingResource($parking),
        ];

        return  response()->json($data, 200);
    }

    public function endParking($parkingCode)
    {
        $parking = ParkingEndCollection::endParking($parkingCode);

        $data = [
            'success' => $parking ? true : false,
            'message' => trans('garage.' . $parking ? 'parked_car_ended_successfully' : 'parked_car_already_scaned_befor_or_not_found'),
            'data' => $parking ? new ParkingResource($parking) : [],
        ];

        return  response()->json($data, 200);
    }

    public function balance()
    {
        $user = auth()->guard('api')->user();

        $parckedCostToday = Parking::where('saies_id', $user->id)
            ->where('accountantsStatus', '!=', 1)
            ->sum('cost');

        return ['current_balance' => (string)$parckedCostToday . " SAR"];
    }
}
