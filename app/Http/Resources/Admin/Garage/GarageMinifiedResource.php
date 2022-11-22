<?php

namespace App\Http\Resources\Admin\Garage;

use App\Constants\Api\ParkingTypes;
use Illuminate\Http\Resources\Json\JsonResource;

class GarageMinifiedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $resource = [

            'id' => $this->id,
            'nameAr' => $this->nameAr,
            'nameEn' => $this->nameEn,
            'country_id' => $this->country_id,
            'governorate_id' => $this->governorate_id,
            'city_id' => $this->city_id,
            'area_id' => $this->area_id,
        ];


        $resource['valet_parking'] = ParkingTypes::VALET_PARKING;
        $resource['valet_parking']['cost'] = $this->valetCost;
        
        $resource['vip_parking'] = ParkingTypes::VIP_PARKING;
        $resource['vip_parking']['cost'] = $this->vipCost;
        
        $resource['per_hour'] = ParkingTypes::PER_HOUR;
        $resource['per_hour']['cost'] = $this->hourCost;
        
        $resource['fine_hour'] = ParkingTypes::FINE_PARKING;
        $resource['fine_hour']['cost'] = $this->fineCost;


        return $resource;
    }
}
