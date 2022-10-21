<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\Street\StreetCreateCollection;
use App\Http\Foundations\Admins\Street\StreetUpdateCollection;
use App\Http\Requests\Street\StreetCreateRequest;
use App\Http\Requests\Street\StreetUpdateRequest;
use App\Http\Resources\Street\StreetResource;
use App\Models\Country;
use Illuminate\Http\Request;

class StreetController extends Controller
{
    
    public function index()
    {
        $streets = Country::where('type',4)->get();
        $streets = StreetResource::collection($streets);

        return view('Admin.Streets.index',compact('streets'));
    }
    
    public function show(Country $country)
    {
        return $country;
    }

    public function create()
    {
        $countries = Country::where('type',0)->get(); //country
        $governates = Country::where('type',1)->get(); //governate
        $cities = Country::where('type',2)->get(); //cities
        $areas = Country::where('type',3)->get(); //cities

        return view('Admin.Streets.create',compact('countries','governates','cities','areas'));
    }
    
    public function store(StreetCreateRequest $request)
    {

        StreetCreateCollection::createStreet($request);

        session()->flash('success','Street created successfully');
        return redirect(url('admin/streets'));

    }
    
    public function edit(Country $country)
    {
        $governorates = Country::where('type',1)->get();
        $countries = Country::where('type',0)->get();
        $cities = Country::where('type',2)->get();
        $areas = Country::where('type',3)->get();
        $street = new StreetResource($country);
        return view('Admin.Streets.edit',compact('street','governorates','countries','cities','areas'));
    }

    public function update(StreetUpdateRequest $request,Country $country)
    {
        StreetUpdateCollection::updateStreet($request ,$country);
        session()->flash('success','Street updated successfully');
        return redirect(url('admin/streets'));
        
    }
   
    public function destroy(Country $country)
    {
        $country->delete();
        session()->flash('success','Street deleted successfully');
        return back();
    }
}
