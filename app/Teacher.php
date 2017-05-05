<?php

namespace App;

use DB;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    use Sluggable;
    use SoftDeletes;
    
    protected $table = 'teachers';

    protected $fillable = [
        'full_name',
        'iamge',
        'slug',
        'intro',
        'slogan',
    ];
    
    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    public function products()
    {
        return $this->hasMany('App\Product', 'teacher_id', 'id');
    }
    
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'full_name'
            ]
        ];
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
    
    public function createData($data)
    {
        DB::beginTransaction();
        try {
            $saved = $this->create($data);
            if ($saved) {
                DB::commit();
                return $saved;
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
        }
    }
}
