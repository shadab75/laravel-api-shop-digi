<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded=[];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'product_attribute')
            ->withPivot('value','is_active');
    }
}
