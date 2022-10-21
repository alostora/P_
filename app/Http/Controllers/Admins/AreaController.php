<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\Countries\Area\AreaCreateCollection;
use App\Http\Foundations\Admins\Countries\Area\AreaUpdateCollection;
use App\Http\Requests\Countries\Area\AreaCreateRequest;
use App\Http\Requests\Countries\Area\AreaUpdateRequest;
use App\Http\Resources\Area\AreaResource;
use App\Models\Country;
use Illuminate\Http\Request;

class AreaController extends Controller
{

    public function index()
    {
        $areas = Country::where('type', 3)->get();
        $areas = AreaResource::collection($areas);

        return view('Admin.Areas.index', compact('areas'));
    }

    public function show(Country $country)
    {
        return $country;
    }

    public function create()
    {
        $countries = Country::where('type', 0)->get(); //country
        $governates = Country::where('type', 1)->get(); //governate
        $cities = Country::where('type', 2)->get(); //governate

        return view('Admin.Areas.create', compact('countries', 'governates', 'cities'));
    }

    public function store(AreaCreateRequest $request)
    {

        AreaCreateCollection::createArea($request);

        session()->flash('success', 'area created successfully');
        return redirect(url('admin/areas'));
    }

    public function edit(Country $country)
    {
        $governorates = Country::where('type', 1)->get();
        $countries = Country::where('type', 0)->get();
        $cities = Country::where('type', 2)->get();
        $area = new AreaResource($country);
        return view('Admin.Areas.edit', compact('area', 'governorates', 'countries', 'cities'));
    }

    public function update(AreaUpdateRequest $request, Country $country)
    {
        AreaUpdateCollection::updateArea($request, $country);
        session()->flash('success', 'area updated successfully');
        return redirect(url('admin/areas'));
    }

    public function destroy(Country $country)
    {
        $country->delete();
        session()->flash('success', 'area deleted successfully');
        return back();
    }
}
