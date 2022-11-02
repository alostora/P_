<?php

namespace App\Http\Resources;

use App\Http\Resources\Admin\Garage\GarageKeeperResource;
use App\Http\Resources\Admin\Garage\GarageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserMinifiedResource extends JsonResource
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
            'name' => $this->name,
            'phone' => $this->phone,
            'garage' => new GarageKeeperResource($this->garage),
        ];
    }
}
