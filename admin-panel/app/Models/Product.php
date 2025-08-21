<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded=[];

    public function Category()
    {
        return $this->belongsTo(Category::class);
  }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class,'product_attributes')->withPivot('value','is_active');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function variations()
    {
        return $this->hasMany(ProductVariation::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
