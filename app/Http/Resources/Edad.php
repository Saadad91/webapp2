<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Edad extends JsonResource
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
            'name' => $this->name,
            'years' => $this->years,
            'mes' => $this->mes,
            'dia' => $this->dia
        ];
    }
}
