<?php

namespace App\Http\Requests\GarageKeeper;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class GarageKeeperUpdateRequest extends FormRequest
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
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users,email,' . $request->id . '|max:100',
            'password' => 'max:100',
            'confirmPassword' => 'same:password',
            'phone' => 'required|unique:users,phone,' . $request->id . '|max:20',
            'address' => 'required|max:255',
            'identificationNumber' => 'max:255',
        ];
    }
}
