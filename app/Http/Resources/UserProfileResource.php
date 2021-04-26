<?php

namespace App\Http\Resources;

use App\Role;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->username,
            'email' => $this->email,
            'phone_number' => $this->phone,
            'role' => $this->role_id == Role::ADMIN ? 'Admin' : 'Player',
            'role_id' => $this->role_id,
            'isActive' => $this->isActive,
            'verified' => $this->verified_at != null,
        ];
    }
}
