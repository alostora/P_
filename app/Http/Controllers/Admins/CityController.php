<?php

namespace App\Http\Controllers\Admins;

use App\Constants\Admin\CountryTyps;
use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\Countries\City\CityCreateCollection;
use App\Http\Foundations\Admins\Countries\City\CityUpdateCollection;
use App\Http\Requests\Countries\City\CityCreateRequest;
use App\Http\Requests\Countries\City\CityUpdateRequest;
use App\Http\Resources\Admin\City\CityResource;
use App\Models\Country;

class CityController extends Controller
{

    public function index(Country $country)
    {
        $cities = Country::where('governorate_id',$country->id)->where('type', CountryTyps::CITY['code'])->get();

        $cities = CityResource::collection($cities);

        return view('Admin.Cities.index', compact('cities'));
    }

    public function show(Country $country)
    {
        return $country;
    }

    public function create(Country $country)
    {
        $governate = $country;

        return view('Admin.Cities.create', compact('governate'));
    }

    public function store(CityCreateRequest $request)
    {

        CityCreateCollection::createCity($request);

        session()->flash('success', 'admin created successfully');
        return redirect(url('admin/cities/'.$request->governorate_id));
    }

    public function edit(Country $country)
    {
        $city = new CityResource($country);
        return view('Admin.Cities.edit', compact('city'));
    }

    public function update(CityUpdateRequest $request, Country $country)
    {
        CityUpdateCollection::updateCity($request, $country);
        session()->flash('success', 'admin updated successfully');
        return redirect(url('admin/cities/'.$request->governorate_id));
    }

    public function destroy(Country $country)
    {
        $country->delete();
        session()->flash('success', 'country deleted successfully');
        return back();
    }
}
