<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApartmentResource extends JsonResource
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
            'city'=>$this->city,
            'street'=>$this->street,
            'square_footage'=>$this->square_footage,
            'rooms_num'=>$this->rooms_num,
            'parking'=>$this->parking
        ];
    }
}
