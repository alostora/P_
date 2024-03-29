<?php

namespace App\Http\Controllers\Api\Admins;

use App\Constants\UserTyps;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ParkingResource;
use App\Models\Parking;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SellerAccountantsController extends Controller
{
    public function index(Request $request)
    {
        // $saies = User::where('type', UserTyps::SAIES['code'])->get();

        $parking = Parking::where('accountantsStatus', $request->get('accountantsStatus'))

            ->where(function ($q) use ($request) {

                if (!empty($request->get('saies_id'))) {
                    $q->where('saies_id', $request->get('saies_id'));
                }

                if (!empty($request->get('date_from')) && !empty($request->get('date_to'))) {

                    $q->whereBetween('ends_at', [
                        Carbon::create($request->get('date_from'))->startOfDay(),
                        Carbon::create($request->get('date_to'))->endOfDay()
                    ]);
                }

                if (!empty($request->get('date_from')) && empty($request->get('date_to'))) {
                    $q->whereBetween('ends_at', [
                        Carbon::create($request->get('date_from'))->startOfDay(),
                        Carbon::create(Carbon::now())->endOfDay()
                    ]);
                }
            })->paginate(25);

        $parking = ParkingResource::collection($parking);

        return $parking;
    }
}
