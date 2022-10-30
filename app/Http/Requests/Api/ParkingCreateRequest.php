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
            'startDate' => 'required|date',
            'endDate' => 'required|date',
            'costType' => 'required|numeric',
            'cost' => 'required|numeric',
            'status' => 'required|numeric',
            'notes' => 'required|string',
            'userName' => 'required|string',
            'carNo' => 'required|string',
            'idNo' => 'required|string',
            'licenceNo' => 'required|string',
            'phoneNo' => 'required|string',
            'type' => 'required|numeric',
            'code' => 'required|string'

        ];
    }
}
