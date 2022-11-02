<?php

namespace App\Http\Requests\Garage;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class GarageUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(Request $request)
    {
        return [
            'id' => 'required',
            'nameAr' => 'required|unique:countries,nameAr|max:100',
            'nameEn' => 'required|unique:countries,nameEn|max:100',
            'longitude' => 'required',
            'latitude' => 'required',
            'hourCost' => 'required',
            'carCount' => 'required',
            'country_id' => 'required|exists:countries,id',
            'governorate_id' => 'required|exists:countries,id',
            'city_id' => 'required|exists:countries,id',
            'area_id' => 'required|exists:countries,id',
            'street_id' => 'required|exists:countries,id',
            'saies_id' => 'required|exists:countries,id',

        ];
    }
}
