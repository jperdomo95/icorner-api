<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray([
            'name' => $this->name,
            'tag' => $this->user_tag,
            'email' => $this->email,
            'cellphone' => $this->cellphone,
        ]);
    }
}
