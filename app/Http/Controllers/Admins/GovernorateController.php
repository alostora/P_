<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\Governorate\GovernorateCreateCollection;
use App\Http\Foundations\Admins\Governorate\GovernorateUpdateCollection;
use App\Http\Requests\Governorate\GovernorateCreateRequest;
use App\Http\Requests\Governorate\GovernorateUpdateRequest;
use App\Http\Resources\Governorates\GovernorateResource;
use App\Models\Country;
use Illuminate\Http\Request;

class GovernorateController extends Controller
{
    
    public function index()
    {
        $governorates = Country::where('type',1)->get();

        $governorates = GovernorateResource::collection($governorates);

        return view('Admin.Governorates.index',compact('governorates'));
    }
    
    public function show(Country $country)
    {
        return $country;
    }

    public function create()
    {
        $countries = Country::where('type',0)->get();

        return view('Admin.Governorates.create',compact('countries'));
    }
    
    public function store(GovernorateCreateRequest $request)
    {

        GovernorateCreateCollection::createGovernorate($request);

        session()->flash('success','admin created successfully');
        return redirect(url('admin/governorates'));

    }
    
    public function edit(Country $country)
    {
        $countries = Country::where('type',0)->get();
        $governorate = new GovernorateResource($country);
        return view('Admin.Governorates.edit',compact('governorate','countries'));
    }

    public function update(GovernorateUpdateRequest $request,Country $country)
    {
        GovernorateUpdateCollection::updateGovernorate($request ,$country);
        session()->flash('success','admin updated successfully');
        return redirect(url('admin/governorates'));
        
    }
   
    public function destroy(Country $country)
    {
        $country->delete();
        session()->flash('success','country deleted successfully');
        return back();
    }
}
