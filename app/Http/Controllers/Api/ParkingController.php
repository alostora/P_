<?php

namespace App\Http\Controllers\Api;

use App\Constants\Api\ParkingTypes;
use App\Http\Controllers\Controller;
use App\Http\Foundations\Api\Parking\ParkingCreateCollection;
use App\Http\Requests\Api\ParkingCreateRequest;
use App\Http\Resources\Api\ParkingResource;
use App\Models\Garage;
use App\Models\Parking;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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

    public function show(Parking $parking)
    {
        $data = [
            'success' => true,
            'message' => trans('garage.parked_car_retrieved_successfully'),
            'data' => new ParkingResource($parking),
        ];

        return  response()->json($data, 200);
    }

    public function endParking(Parking $parking)
    {
        $data = [
            'success' => false,
            'message' => trans('garage.parked_car_already_scaned_befor'),
            'data' => [],
        ];

        if (empty($parking->ends_at)) {

            $user = auth()->guard('api')->user();
            $parking->status = true;
            $parking->ends_at = Carbon::now();
            $parking->saies_id = $user->id;
            $parking->save();

            $parking = Parking::find($parking->id);

            $start  = new Carbon($parking->starts_at);
            $end  = new Carbon($parking->ends_at);

            $minutes = $start->diff($end)->format('%I');
            $hours = $start->diffInHours($end);

            $hours = $minutes > 0 ? $start->diffInHours($end) + 1 : $hours;

            if ($minutes > 0 && $hours > 0) {
                $hours = $start->diffInHours($end) + 1;
            } elseif ($hours == 0) {
                $hours = 1;
            }

            if ($parking->type == ParkingTypes::VALET_PARKING['code']) {
                $parking->cost = ParkingTypes::VALET_PARKING['price'];
            }

            if ($parking->type == ParkingTypes::VIP_RKING['code']) {
                $parking->cost = ParkingTypes::VIP_RKING['price'];
            }

            if ($parking->type == ParkingTypes::PER_HOUR['code']) {
                $parking->cost = $hours * $user->garage->garage->hourCost;
            }

            $parking->save();

            $data = [
                'success' => true,
                'message' => trans('garage.parked_car_ended_successfully'),
                'data' => new ParkingResource($parking),
            ];
        }


        return  response()->json($data, 200);
    }


    public function balance()
    {
        $user = auth()->guard('api')->user();

        $parckedCostToday = Parking::where('saies_id', $user->id)

            ->whereBetween('ends_at', [

                carbon::create(Carbon::today())->startOfDay(),

                Carbon::create(Carbon::today())->endOfDay()

            ])
            ->sum('cost');

        $parckedCostToday = $parckedCostToday;

        return ['current_balance' => (string)$parckedCostToday . " SAR"];
    }
}
