<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    protected $table="attributes";
    protected $guarded=[];

    public function category()
    {
        return $this->belongsToMany(Category::class,'attribute_category');
    }
}
