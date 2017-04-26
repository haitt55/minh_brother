<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'full_name',
        'slug',
        'intro',
        'solegan',
    ];

    public function products()
    {
        return $this->hasMany('App\Product', 'teacher_id', 'id');
    }

    static function getOptions()
    {
    	return $this->all()->sortBy('full_name')->pluck('full_name', 'id');
    }
}
