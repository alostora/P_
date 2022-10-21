<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\City\CityCreateCollection;
use App\Http\Foundations\Admins\City\CityUpdateCollection;
use App\Http\Foundations\Admins\Governorate\GovernorateCreateCollection;
use App\Http\Foundations\Admins\Governorate\GovernorateUpdateCollection;
use App\Http\Requests\City\CityCreateRequest;
use App\Http\Requests\City\CityUpdateRequest;
use App\Http\Requests\Governorate\GovernorateCreateRequest;
use App\Http\Requests\Governorate\GovernorateUpdateRequest;
use App\Http\Resources\City\CityResource;
use App\Http\Resources\Governorates\GovernorateResource;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    
    public function index()
    {
        $cities = Country::where('type',2)->get();

        $cities = CityResource::collection($cities);

        return view('Admin.Cities.index',compact('cities'));
    }
    
    public function show(Country $country)
    {
        return $country;
    }

    public function create()
    {
        $countries = Country::where('type',0)->get(); //country
        $governates = Country::where('type',1)->get(); //governate

        return view('Admin.Cities.create',compact('countries','governates'));
    }
    
    public function store(CityCreateRequest $request)
    {

        CityCreateCollection::createCity($request);

        session()->flash('success','admin created successfully');
        return redirect(url('admin/cities'));

    }
    
    public function edit(Country $country)
    {
        $governorates = Country::where('type',1)->get();
        $countries = Country::where('type',0)->get();
        $city = new CityResource($country);
        return view('Admin.Cities.edit',compact('city','governorates','countries'));
    }

    public function update(CityUpdateRequest $request,Country $country)
    {
        CityUpdateCollection::updateCity($request ,$country);
        session()->flash('success','admin updated successfully');
        return redirect(url('admin/cities'));
        
    }
   
    public function destroy(Country $country)
    {
        $country->delete();
        session()->flash('success','country deleted successfully');
        return back();
    }
}
