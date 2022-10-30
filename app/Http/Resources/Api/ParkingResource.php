<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ParkingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            
            'id' => $this->id,
            'garage_id' => $this->garage_id,
            'saies_id' => $this->saies_id,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate,
            'costType' => $this->costType,
            'cost' => $this->cost,
            'status' => $this->status,
            'notes' => $this->notes,
            'userName' => $this->userName,
            'carNo' => $this->carNo,
            'idNo' => $this->idNo,
            'licenceNo' => $this->licenceNo,
            'phoneNo' => $this->phoneNo,
            'type' => $this->type,
            'code' => $this->code,
            

        ];
    }
}
