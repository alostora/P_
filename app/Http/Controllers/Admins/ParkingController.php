<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ParkingResource;
use App\Models\Parking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ParkingController extends Controller
{

    public function index(Request $request)
    {
        $parking = Parking::where(function($q) use ($request){

            if( !empty($request->get('date_from')) && !empty($request->get('date_to')) ){

                $q->
                    whereBetween('ends_at', [
                        Carbon::create($request->get('date_from'))->startOfDay(),
                        Carbon::create($request->get('date_to'))->endOfDay()
                    ]);

            }

            if( !empty($request->get('date_from')) && empty($request->get('date_to')) ){
                $q->
                    whereBetween('ends_at', [
                        Carbon::create($request->get('date_from'))->startOfDay(),
                        Carbon::create(Carbon::now())->endOfDay()
                    ]);
            }
        })->get();
        
        $parking = ParkingResource::collection($parking);


        return view('Admin.Parking.index', compact('parking'));
    }
    
    public function openParkeing(Request $request)
    {
        $parking = Parking::where(function($q) use ($request){

            if( !empty($request->get('date_from')) && !empty($request->get('date_to')) ){

                $q->
                    whereBetween('starts_at', [
                        Carbon::create($request->get('date_from'))->startOfDay(),
                        Carbon::create($request->get('date_to'))->endOfDay()
                    ]);

            }

            if( !empty($request->get('date_from')) && empty($request->get('date_to')) ){
                $q->
                    whereBetween('starts_at', [
                        Carbon::create($request->get('date_from'))->startOfDay(),
                        Carbon::create(Carbon::now())->endOfDay()
                    ]);
            }
        })->where('ends_at',null)->get();
        
        $parking = ParkingResource::collection($parking);


        return view('Admin.Parking.index', compact('parking'));
    }
}
