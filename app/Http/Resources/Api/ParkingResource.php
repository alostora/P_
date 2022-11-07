<?php

namespace App\Http\Resources\Api;

use App\Http\Resources\Admin\Garage\GarageMinifiedResource;
use App\Http\Resources\UserMinifiedResource;
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

            'clientName' => $this->clientName,

            'clientCarNumber' => $this->clientCarNumber,

            'clientIdentificationNumber' => $this->clientIdentificationNumber,

            'licenceNumber' => $this->licenceNumber,

            'clientPhone' => $this->clientPhone,
            
            'code' => $this->code,

            'costType' => $this->costType,

            'cost' => $this->cost,

            'notes' => $this->notes,

            'starts_at' => $this->starts_at,

            'ends_at' => $this->ends_at,

            'saies' => new UserMinifiedResource($this->saies),

            'garage' => new GarageMinifiedResource($this->garage),

        ];
    }
}
