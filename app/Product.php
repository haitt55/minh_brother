<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'teacher_id',
        'category_id',
        'image',
        'intro',
        'content',
        'about',
        'target_people',
        'rate'
    ];

    public function teacher()
    {
        return $this->belongsTo('App\Teacher', 'teacher_id');
    }

    public function category()
    {
        return $this->belongsTo('App\ProductCategory', 'category_id');
    }
}
