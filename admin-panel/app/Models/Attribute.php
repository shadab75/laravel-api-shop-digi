<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    protected $table="attributes";
    protected $guarded=[];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'attribute_category');
    }

    public function values()
    {
        return $this->hasMany(ProductAttribute::class)->select('attribute_id','value')->distinct();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,'product_attributes')->withPivot('value','is_active');
    }

    public function variationValues()
    {
        return $this->hasMany(ProductVariation::class)->select('attribute_id','value')->distinct();
    }
}
