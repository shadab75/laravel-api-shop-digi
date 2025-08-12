<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CouponResource extends JsonResource
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
         'code'=>$this->code,
         'type'=>$this->type,
         'amount'=>$this->amount,
         'percentage'=>$this->percentage,
         'max_percentage_amount'=>$this->max_percentage_amount,
         'expired_at'=>$this->expired_at,
         'description'=>$this->description
       ];
    }

}
