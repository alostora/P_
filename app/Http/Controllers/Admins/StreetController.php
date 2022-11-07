<?php

namespace App\Http\Controllers\Admins;

use App\Constants\Admin\CountryTyps;
use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\Countries\Street\StreetCreateCollection;
use App\Http\Foundations\Admins\Countries\Street\StreetUpdateCollection;
use App\Http\Requests\Countries\Street\StreetCreateRequest;
use App\Http\Requests\Countries\Street\StreetUpdateRequest;
use App\Http\Resources\Admin\Street\StreetResource;
use App\Models\Country;

class StreetController extends Controller
{

    public function index(Country $country)
    {
        $streets = Country::where('area_id',$country->id)->where('type', CountryTyps::STREET['code'])->get();
        $streets = StreetResource::collection($streets);

        return view('Admin.Streets.index', compact('streets'));
    }

    public function show(Country $country)
    {
        return $country;
    }

    public function create(Country $country)
    {
        $area = $country;

        return view('Admin.Streets.create', compact('area'));
    }

    public function store(StreetCreateRequest $request)
    {

        StreetCreateCollection::createStreet($request);

        session()->flash('success', 'Street created successfully');

        return redirect(url('admin/streets/'.$request->area_id));
    }

    public function edit(Country $country)
    {
        $street = new StreetResource($country);
        return view('Admin.Streets.edit', compact('street'));
    }

    public function update(StreetUpdateRequest $request, Country $country)
    {
        StreetUpdateCollection::updateStreet($request, $country);
        session()->flash('success', 'Street updated successfully');
        return redirect(url('admin/streets/'.$request->area_id));
    }

    public function destroy(Country $country)
    {
        $country->delete();
        session()->flash('success', 'Street deleted successfully');
        return back();
    }
}
