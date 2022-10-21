<?php

namespace App\Http\Requests\Street;

use Illuminate\Foundation\Http\FormRequest;

class StreetCreateRequest extends FormRequest
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
    public function rules()
    {
        return [
            'nameAr'=>'required|unique:countries,nameAr|max:100',
            'nameEn'=>'required|unique:countries,nameEn|max:100',
            'country_id'=>'required',
            'governorate_id'=>'required',
            'city_id'=>'required',
            'area_id'=>'required',
        ];
    }
}
