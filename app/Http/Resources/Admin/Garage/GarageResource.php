<?php

namespace App\Http\Resources\Admin\Garage;

use Illuminate\Http\Resources\Json\JsonResource;

class GarageResource extends JsonResource
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
            'lang' => $this->lang,
            'lat' => $this->lat,
            'country_id' => $this->country_id,
            'governorate_id' => $this->governorate_id,
            'city_id' => $this->city_id,
            'area_id' => $this->area_id,
        ];
    }
}
