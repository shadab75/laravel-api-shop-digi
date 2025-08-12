<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'id'=>$this->id,
          'parent_id'=>$this->parent_id,
          'name'=>$this->name,
          'slug'=>$this->slug,
          'is_active'=>$this->is_active,
          'description'=>$this->description,
          'categoryable_type' => $this->categoryable_type,
          'children'=>CategoryResource::collection($this->whenLoaded('children')),
          'parent' => new CategoryResource($this->whenLoaded('parent')),
          'attributes'=>$this->whenLoaded('attributes'),
        ];
    }
}
