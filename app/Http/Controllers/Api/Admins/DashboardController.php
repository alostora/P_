<?php

namespace App\Http\Controllers\Api\Admins;

use App\Constants\UserTyps;
use App\Http\Controllers\Controller;
use App\Models\Parking;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['saiesCount'] = User::where('type',UserTyps::SAIES['code'])->count();

        $data['parkedCarsCount'] = Parking::whereBetween('starts_at', [
            carbon::create(Carbon::today())->startOfDay(),
            Carbon::create(Carbon::today())->endOfDay()
        ])
        ->count();

        $data['totalTodayIncom'] = Parking::whereBetween('ends_at', [
            carbon::create(Carbon::today())->startOfDay(),
            Carbon::create(Carbon::today())->endOfDay()
        ])
        ->sum('cost');

        $data['totalMonthIncom'] = Parking::whereBetween('ends_at', [
            carbon::create(Carbon::today())->startOfMonth(),
            Carbon::create(Carbon::today())->endOfDay()
        ])
        ->sum('cost');
        
        $data['totalYearIncom'] = Parking::whereBetween('ends_at', [
            carbon::create(Carbon::today())->startOfYear(),
            Carbon::create(Carbon::today())->endOfDay()
        ])
        ->sum('cost');
        


        return $data;
    }
}
