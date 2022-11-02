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
            "clientName" => "required|string",
            "clientCarNumber" => "required|string",
            "clientIdentificationNumber" => "required|string",
            "licenceNumber" => "required|string",
            "clientPhone" => "required|string",
        ];
    }
}
