<?php

namespace App\Http\Resources\Admin\Garage;

use App\Models\GarageKeeper;
use Illuminate\Http\Resources\Json\JsonResource;

class GarageKeeperResource extends JsonResource
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
            'garage' => new GarageMinifiedResource($this->garage),
        ];
    }
}
