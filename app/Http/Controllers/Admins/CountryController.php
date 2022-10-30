<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\Countries\Country\CountryCreateCollection;
use App\Http\Foundations\Admins\Countries\Country\CountryUpdateCollection;
use App\Http\Requests\Countries\Country\CountryCreateRequest;
use App\Http\Requests\Countries\Country\CountryUpdateRequest;
use App\Http\Resources\Admin\Countries\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function index()
    {
        $countries = Country::where('type', 0)->get();

        $countries = CountryResource::collection($countries);

        return view('Admin.Countries.index', compact('countries'));
    }

    public function show(Country $country)
    {
        return $country;
    }

    public function create()
    {
        return view('Admin.Countries.create');
    }

    public function store(CountryCreateRequest $request)
    {

        CountryCreateCollection::createCountry($request);

        session()->flash('success', 'admin created successfully');
        return redirect(url('admin/countries'));
    }

    public function edit(Country $country)
    {
        $country = new CountryResource($country);
        return view('Admin.Countries.edit', compact('country'));
    }

    public function update(CountryUpdateRequest $request, Country $country)
    {
        CountryUpdateCollection::updateCountry($request, $country);
        session()->flash('success', 'admin updated successfully');
        return redirect(url('admin/countries'));
    }

    public function destroy(Country $country)
    {
        $country->delete();
        session()->flash('success', 'country deleted successfully');
        return back();
    }
}
