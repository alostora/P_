<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class ParkingCreateRequest extends FormRequest
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
            "clientName" => "nullable|string|max:20",
            "clientCarNumber" => "nullable|string",
            "clientIdentificationNumber" => "nullable|string|max:20",
            "licenceNumber" => "nullable|string|max:20",
            "clientPhone" => "nullable|string|max:20",
            "type" => "required|in:0,1,2",
        ];
    }
}
