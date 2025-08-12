<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table="brands";
    protected $guarded=[];
    use Sluggable;

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

    public function getIsActiveAttribute($is_active)
    {
    return $is_active?'فعال':'غیر فعال';
    }


}
