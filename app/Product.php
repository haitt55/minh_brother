<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use Sluggable, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'slug',
        'teacher_id',
        'category_id',
        'image',
        'intro',
        'content',
        'about',
        'price',
        'target_people',
        'rate'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher', 'teacher_id');
    }

    public function category()
    {
        return $this->belongsTo('App\ProductCategory', 'category_id');
    }
}
