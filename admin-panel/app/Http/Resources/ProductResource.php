<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
          'name'=>$this->name,
          'brand'=>new BrandResource($this->whenLoaded('brand')),
          'category'=>new CategoryResource($this->whenLoaded('category')),
          'attributes'=>ProductAttributeResource::collection($this->whenLoaded('attributes')),
          'variations'=>VariationResource::collection($this->whenLoaded('variations')),
          'primary_image'=>url(env('PRODUCT_IMAGES_UPLOAD_PATH').$this->primary_image),
          'images'=>ProductImageResource::collection($this->whenLoaded('images')),
          'is_active'=>$this->is_active,
        ];
    }
}
