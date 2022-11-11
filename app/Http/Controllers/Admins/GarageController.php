<?php

namespace App\Http\Controllers\Admins;

use App\Constants\Admin\CountryTyps;
use App\Constants\UserTyps;
use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\Garage\GarageCreateCollection;
use App\Http\Foundations\Admins\Garage\GarageUpdateCollection;
use App\Http\Requests\Garage\GarageCreateRequest;
use App\Http\Requests\Garage\GarageUpdateRequest;
use App\Http\Resources\Admin\Garage\GarageKeeperResource;
use App\Http\Resources\Admin\Garage\GarageResource;
use App\Models\Country;
use App\Models\Garage;
use App\Models\GarageKeeper;
use App\Models\User;

class GarageController extends Controller
{

    public function index(Country $country)
    {
        $garages = Garage::where('street_id',$country->id)->get();
        $garages = GarageResource::collection($garages);

        return view('Admin.Garages.index', compact('garages'));
    }

    public function show(Garage $garage)
    {
        return $garage;
    }

    public function create(Country $country)
    {
        $data['street'] = $country;
        $data['saies'] = User::where('type', UserTyps::SAIES['code'])->get();

        return view('Admin.Garages.create', $data);
    }

    public function store(GarageCreateRequest $request)
    {
        GarageCreateCollection::createGarage($request);

        session()->flash('success', 'Street created successfully');

        return redirect(url('admin/garages/'.$request->street_id));
    }

    public function edit(Garage $garage)
    {
        $data['garage'] = new GarageResource($garage);
        $data['saies'] = User::where('type', UserTyps::SAIES['code'])->get();

        return view('Admin.Garages.edit', $data);
    }

    public function update(GarageUpdateRequest $request, Garage $garage)
    {
        GarageUpdateCollection::updateGarage($request, $garage);

        session()->flash('success', 'Garage updated successfully');

        return redirect(url('admin/garages/'.$garage->street_id));
    }

    public function destroy(Garage $garage)
    {
        $garage->delete();
        session()->flash('success', 'Garage deleted successfully');

        return back();
    }
    
    public function sellers(Garage $garage)
    {
        $data['sellers'] = GarageKeeperResource::collection($garage->manySaies);
        return $data;
        return view('Admin.Garages.Sellers.sellers', $data);
    }
}
