<?php

namespace App\Http\Resource;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'from' => $this->from,
            'to' => $this->to,
            'text' => $this->text,
            'created_at' => $this->created_at,
            'from_name' => $this->fromContact->name,
            'from_profile_image' => $this->fromContact->profile_image,
            'to_name' => $this->toContact->name,
            'to_profile_image' => $this->toContact->profile_image,
        ];
    }
}

