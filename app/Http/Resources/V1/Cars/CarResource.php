<?php

namespace App\Http\Resources\V1\Cars;

use App\Http\Resources\V1\Drivers\DriverResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'available'=>$this->license,
            'description'=>$this->license,
        ];
    }
}
