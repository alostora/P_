<?php

namespace App\Http\Requests\GarageKeeper;

use Illuminate\Foundation\Http\FormRequest;

class GarageKeeperCreateRequest extends FormRequest
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
            'name'=>'required|max:100',
            'email'=>'required|email|unique:users,email|max:100',
            'password'=>'required|max:100',
            'confirmPassword'=>'same:password',
            'phone'=>'required|unique:users,phone|max:20',
            'address'=>'required|max:255',
            'idNo'=>'max:255',
        ];
    }
}
