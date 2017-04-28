<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

	protected $table = 'teachers';

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
    	$teacher = new Teacher();
        $options = array();
        $options[''] = '---';
        $teachers = $teacher->all()->sortBy('full_name')->pluck('full_name', 'id')->toArray();
        if ($teachers) {
            foreach ($teachers as $key => $value) {
                $options[$key] = $value;
            }
        }

        return $options;
    }
}
