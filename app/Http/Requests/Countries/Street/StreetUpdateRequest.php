<?php

namespace App\Http\Requests\Countries\Street;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StreetUpdateRequest extends FormRequest
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
            'nameAr' => 'required|unique:countries,nameAr,' . $request->id . '|max:100',
            'nameEn' => 'required|unique:countries,nameEn,' . $request->id . '|max:100',
            'governorate_id' => 'required',
            'city_id' => 'required',
            'area_id' => 'required',

        ];
    }
}
