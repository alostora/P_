<?php

namespace App\Http\Requests\AssignedGarageKeeper;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AssignedGarageKeeperCreateRequest extends FormRequest
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

            'garage_id' => 'required|exists:garages,id',

            'saies_id' => ['required','exists:users,id',
            
                Rule::unique('garage_keepers')->where(function ($query) use ($request) {
                    return $query->where('garage_id', $request->garage_id);
                })
        ],
            
        ];
    }
}
