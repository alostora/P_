<?php

namespace App\Http\Requests\GarageKeeper;

use App\Constants\UserTyps;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            'email' => ['email','max:100',

                Rule::unique('users')->where(function ($query) use ($request) {
                    return $query->where('type', UserTyps::SAIES['code']);
                })->ignoreModel($this->user)
            ],

            'password' => 'max:100',
            'confirmPassword' => 'same:password',
            'phone' => 'unique:users,phone,' . $request->id . '|max:20',
            'address' => 'required|max:255',
            'identificationNumber' => 'max:255',
            'garage_id' => 'required|exists:garages,id',
        ];
    }
}
