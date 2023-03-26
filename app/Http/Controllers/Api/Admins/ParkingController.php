<?php

namespace App\Http\Controllers\Api\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ParkingResource;
use App\Models\Parking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function closeParking(Request $request)
    {
        $parking = Parking::where(function ($q) use ($request) {

            if (!empty($request->get('date_from')) && !empty($request->get('date_to'))) {

                $q->whereBetween('ends_at', [

                    Carbon::create($request->get('date_from'))->startOfDay(),

                    Carbon::create($request->get('date_to'))->endOfDay()

                ]);
            } elseif (!empty($request->get('date_from')) && empty($request->get('date_to'))) {

                $q->whereBetween('ends_at', [

                    Carbon::create($request->get('date_from'))->startOfDay(),

                    Carbon::create(Carbon::now())->endOfDay()
                ]);
            } else {
                $q->whereBetween('ends_at', [

                    Carbon::yesterday(),

                    Carbon::create(Carbon::now())->endOfDay()

                ]);
            }
        })->where('accountantsStatus', 1)

            ->paginate(25);

        return ParkingResource::collection($parking);
    }

    public function openParking(Request $request)
    {
        $parking = Parking::where(function ($q) use ($request) {

            if (!empty($request->get('date_from')) && !empty($request->get('date_to'))) {

                $q->whereBetween('ends_at', [

                    Carbon::create($request->get('date_from'))->startOfDay(),

                    Carbon::create($request->get('date_to'))->endOfDay()
                ]);
            } elseif (!empty($request->get('date_from')) && empty($request->get('date_to'))) {

                $q->whereBetween('ends_at', [

                    Carbon::create($request->get('date_from'))->startOfDay(),

                    Carbon::create(Carbon::now())->endOfDay()
                ]);
            } else {
                $q->whereBetween('ends_at', [

                    Carbon::yesterday(),

                    Carbon::create(Carbon::now())->endOfDay()

                ]);
            }
        })->where('accountantsStatus', 0)

            ->where('ends_at', '!=', null)

            ->paginate(25);

        return ParkingResource::collection($parking);
    }
}
