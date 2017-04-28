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
    	$productCategory = new ProductCategory();
        $options = array();
        $options[''] = '---';
        $productCategories = $productCategory->all()->sortBy('name')->pluck('name', 'id')->toArray();
        if ($productCategories) {
            foreach ($productCategories as $key => $value) {
                $options[$key] = $value;
            }
        }

    	return $options;
    }
}
