<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Sluggable;
    //
    protected $table = "tags";
    protected $guarded=[];
    public function sluggable():array{
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

}
