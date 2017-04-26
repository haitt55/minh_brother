<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ProductCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'note',
    ];

    public function products()
    {
        return $this->hasMany('App\Product', 'category_id', 'id');
    }


    static function getOptions()
    {
    	return $this->all()->sortBy('name')->pluck('name', 'id');
    }
}
