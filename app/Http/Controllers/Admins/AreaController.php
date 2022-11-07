<?php

namespace App\Http\Controllers\Admins;

use App\Constants\Admin\CountryTyps;
use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\Countries\Area\AreaCreateCollection;
use App\Http\Foundations\Admins\Countries\Area\AreaUpdateCollection;
use App\Http\Requests\Countries\Area\AreaCreateRequest;
use App\Http\Requests\Countries\Area\AreaUpdateRequest;
use App\Http\Resources\Admin\Area\AreaResource;
use App\Models\Country;
use Illuminate\Http\Request;

class AreaController extends Controller
{

    public function index(Country $country)
    {
        $areas = Country::where('city_id',$country->id)->where('type', CountryTyps::AREA['code'])->get();
        $areas = AreaResource::collection($areas);

        return view('Admin.Areas.index', compact('areas'));
    }

    public function show(Country $country)
    {
        return $country;
    }

    public function create(Country $country)
    {
        $city = $country;

        return view('Admin.Areas.create', compact('city'));
    }

    public function store(AreaCreateRequest $request)
    {

        AreaCreateCollection::createArea($request);

        session()->flash('success', 'area created successfully');

        return redirect(url('admin/areas/'.$request->city_id));
    }

    public function edit(Country $country)
    {
        $area = new AreaResource($country);
        
        return view('Admin.Areas.edit', compact('area'));
    }

    public function update(AreaUpdateRequest $request, Country $country)
    {
        AreaUpdateCollection::updateArea($request, $country);

        session()->flash('success', 'area updated successfully');

        return redirect(url('admin/areas/'.$request->city_id));
    }

    public function destroy(Country $country)
    {
        $country->delete();
        session()->flash('success', 'area deleted successfully');
        return back();
    }
}
