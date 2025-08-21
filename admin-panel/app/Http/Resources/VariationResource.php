<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VariationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'              => $this->id,
            'attribute'       => $this->attribute->name ?? null,
            'value'           => $this->value,
            'price'           => $this->price,
            'quantity'        => $this->quantity,
            'sale_price'      => $this->sale_price,
            'date_on_sale_from' => $this->date_on_sale_from,
            'date_on_sale_to'   => $this->date_on_sale_to,
        ];
    }
}
