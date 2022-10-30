<?php

namespace App\Http\Resources\Admin\City;

use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
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
            'nameAr' => $this->nameAr,
            'nameEn' => $this->nameEn,
            'country_id' => $this->country_id,
            'governorate_id' => $this->governorate_id,
            'city_id' => $this->city_id,
            'area_id' => $this->area_id,
        ];
    }
}
