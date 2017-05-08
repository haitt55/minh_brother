<?php

namespace App;

use DB;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Teacher extends Model
{

    use Sluggable;
    use SoftDeletes;
    
    protected $table = 'teachers';

    protected $fillable = [
        'full_name',
        'image',
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
    
    /**
     * Create teacher
     * 
     * @param array $data
     * @return boolean
     */
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
            Log::info($e->getMessage());
            DB::rollback();
        }
    }
    
    /**
     * Update teacher
     * 
     * @param int $id
     * @param array $data
     * @return boolean
     */
    public function updateData($id, $data)
    {
        DB::beginTransaction();
        try {
            $teacher = $this->find($id);
            $teacher->full_name = $data['full_name'];
            $teacher->image = isset($data['image']) ? $data['image'] : $teacher->image;
            $teacher->intro = $data['intro'];
            $teacher->slogan = $data['slogan'];
            $teacher->page_title = $data['page_title'];
            $teacher->meta_keyword = $data['meta_keyword'];
            $teacher->meta_description = $data['meta_description'];
            $saved = $teacher->save();
            
            if ($saved) {
                DB::commit();
                return $saved;
            }
        } catch (\Exception $e) {
            Log::info('Error update teacher id: ' . $id);
            DB::rollback();
        }
    }
}
