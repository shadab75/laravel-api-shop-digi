<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Sluggable;
    //
    protected $table="categories";
    protected $guarded=[];
    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate'=>true,
                'method' => function ($string, $separator) {
                    return preg_replace('/\s+/u', $separator, $string);
                },
            ],
        ];
    }
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }

    public function categoryable()
    {
        return $this->morphTo();
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class,'attribute_category');
    }
}
