<?php

namespace App\Http\Resource;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'profile_image' => $this->profile_image,
            'unread' => $this->unread,
            'last_message_at' =>$this->last_message_at
        ];
    }
}

