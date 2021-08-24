<?php

namespace App\Http\Resources\V1\Drivers;

use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
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
                'photo'=>$this->photo,
                'license'=>$this->license,
        ];
    }
}
