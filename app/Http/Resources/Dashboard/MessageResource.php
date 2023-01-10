<?php

namespace App\Http\Resources\Dashboard;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
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
            "id" => $this->id,
            "avatar_name" => $this->avatar_name,
            "subject" => $this->subject,
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            "message" => $this->message,
            "is_read" => $this->isRead(),
            "created_at" => $this->created_at->format('d M Y'),
        ];
    }
}
