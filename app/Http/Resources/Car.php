<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Car extends JsonResource
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
           // 'CodePin' => $this->CodePin,
            'modele' => $this->modele,
            'status' => $this->status,
            
            
        ];
    }
}
