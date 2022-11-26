<?php

namespace App\Http\Resources\Api;

use App\Constants\Api\ParkingTypes;
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
        

        $resource =  [

            'id' => $this->id,

            'clientName' => $this->clientName,

            'clientCarNumber' => $this->clientCarNumber,

            'clientIdentificationNumber' => $this->clientIdentificationNumber,

            'licenceNumber' => $this->licenceNumber,

            'clientPhone' => $this->clientPhone,

            'code' => $this->code,

            'type' => ParkingTypes::TYPE_LIST[$this->type ?? 0],

            'cost' => $this->cost,

            'notes' => $this->notes,

            'starts_at' => $this->starts_at,

            'ends_at' => $this->ends_at,

            'saies' => new UserMinifiedResource($this->saies),

            'garage' => new GarageMinifiedResource($this->garage),

        ];


        $id = PHP_EOL .'ivoice number : ' . $this->id . PHP_EOL ;

        $code = PHP_EOL .'parking code : ' . $this->code . PHP_EOL ;

        $company_name = 'Valet & Parking Management' . PHP_EOL;

        $tax_registar = 'VAT No. : 311279813600003'. PHP_EOL;

        $starts_at = 'Entry Date : ' . date('Y-m-d H:i',strtotime($this->starts_at)). PHP_EOL;

        $ends_at = 'Exit Date : ' . date('Y-m-d H:i',strtotime($this->ends_at)). PHP_EOL;

        $cost = 'Cost : ' . $this->cost . " SAR" . PHP_EOL;

        $total = 'Total : ' . $this->cost . " SAR" . PHP_EOL;

        $web = 'https://vpmsystems.com'. PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;

        if($this->ends_at != null){

            
            $invoice = PHP_EOL . 'Invoice No.: : ' . $this->id . PHP_EOL;

            $code = 'parking code : ' . $this->code . PHP_EOL ;

            $resource['print_text'] = $invoice . $id . $company_name . $tax_registar . $starts_at . $ends_at  . $cost . $total . $web;

        }else{

            $resource['print_text'] = $id . $company_name . $tax_registar . $starts_at . $web;

        }

        return $resource;

    }
}
