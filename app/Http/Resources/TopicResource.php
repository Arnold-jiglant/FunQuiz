<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TopicResource extends JsonResource
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
            'name' => $this->name,
            'followers' => $this->followers()->count(),
            'qns_count' => $this->questions()->count(),
            'tags' => $this->tags->transform(function ($tag) {
                return new TagResource($tag);
            }),
            'image_url' => $this->image ? route('image', $this->image->id) : route('image','none'),
            'creator' => [
                'id' => $this->creator->id,
                'username' => $this->creator->username,
            ],
        ];
    }
}
