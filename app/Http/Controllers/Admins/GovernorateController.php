<?php

namespace App\Http\Controllers\Admins;

use App\Constants\Admin\CountryTyps;
use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\Countries\Governorate\GovernorateCreateCollection;
use App\Http\Foundations\Admins\Countries\Governorate\GovernorateUpdateCollection;
use App\Http\Requests\Countries\Governorate\GovernorateCreateRequest;
use App\Http\Requests\Countries\Governorate\GovernorateUpdateRequest;
use App\Http\Resources\Admin\Governorates\GovernorateResource;
use App\Models\Country;

class GovernorateController extends Controller
{

    public function index(Country $country)
    {
        $governorates = Country::where('country_id',$country->id)->where('type', CountryTyps::GOVERNORATE['code'])->get();

        $governorates = GovernorateResource::collection($governorates);

        return view('Admin.Governorates.index', compact('governorates'));
    }

    public function show(Country $country)
    {
        return $country;
    }

    public function create()
    {
        return view('Admin.Governorates.create');
    }

    public function store(GovernorateCreateRequest $request)
    {

        GovernorateCreateCollection::createGovernorate($request);

        session()->flash('success', 'admin created successfully');
        return redirect(url('admin/governorates/'.$request->country_id));
    }

    public function edit(Country $country)
    {
        $countries = Country::where('type', 0)->get();
        $governorate = new GovernorateResource($country);
        return view('Admin.Governorates.edit', compact('governorate'));
    }

    public function update(GovernorateUpdateRequest $request, Country $country)
    {
        GovernorateUpdateCollection::updateGovernorate($request, $country);
        session()->flash('success', 'admin updated successfully');
        return redirect(url('admin/governorates/'.$country->country_id));
    }

    public function destroy(Country $country)
    {
        $country->delete();
        session()->flash('success', 'country deleted successfully');
        return back();
    }
}
