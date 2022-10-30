<?php

namespace App\Http\Controllers\Admins;

use App\Constants\UserTyps;
use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\Garage\GarageCreateCollection;
use App\Http\Foundations\Admins\Garage\GarageUpdateCollection;
use App\Http\Requests\Garage\GarageCreateRequest;
use App\Http\Requests\Garage\GarageUpdateRequest;
use App\Http\Resources\Admin\Garage\GarageResource;
use App\Models\Country;
use App\Models\Garage;
use App\Models\User;
use Illuminate\Http\Request;

class GarageController extends Controller
{

    public function index()
    {
        $garages = Garage::get();
        $garages = GarageResource::collection($garages);

        return view('Admin.Garages.index', compact('garages'));
    }

    public function show(Garage $garage)
    {
        return $garage;
    }

    public function create()
    {
        $data['countries'] = Country::where('type', 0)->get(); //country
        $data['governates'] = Country::where('type', 1)->get(); //governate
        $data['cities'] = Country::where('type', 2)->get(); //cities
        $data['areas'] = Country::where('type', 3)->get(); //areas
        $data['streets'] = Country::where('type', 4)->get(); //streets
        $data['saies'] = User::where('type',UserTyps::GARAGE_KEEPER['code'])->get(); //streets

        return view('Admin.Garages.create', $data);
    }

    public function store(GarageCreateRequest $request)
    {

        GarageCreateCollection::createGarage($request);

        session()->flash('success', 'Street created successfully');
        return redirect(url('admin/garages'));
    }

    public function edit(Garage $garage)
    {
        $governorates = Country::where('type', 1)->get();
        $countries = Country::where('type', 0)->get();
        $cities = Country::where('type', 2)->get();
        $areas = Country::where('type', 3)->get();
        $streets = Country::where('type', 4)->get();
        $garage = new GarageResource($garage);
        return view('Admin.Garages.edit', compact('garage', 'streets', 'governorates', 'countries', 'cities', 'areas'));
    }

    public function update(GarageUpdateRequest $request, Garage $garage)
    {
        GarageUpdateCollection::updateGarage($request, $garage);
        session()->flash('success', 'Street updated successfully');
        return redirect(url('admin/garages'));
    }

    public function destroy(Garage $garage)
    {
        $garage->delete();
        session()->flash('success', 'Street deleted successfully');
        return back();
    }
}
