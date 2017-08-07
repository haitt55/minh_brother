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
        'page_title',
        'meta_keyword',
        'meta_description',
        'certified'
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
    
    public function productsInfo()
    {
        return $this->hasMany('App\Product', 'teacher_id', 'id')
                ->select('products.id', 'products.name', 'products.image', 'products.slug')
                ->selectRaw('count(rate_comments.product_id) as comment_count')
                ->leftJoin('rate_comments', 'products.id','=', 'rate_comments.product_id')
                ->selectRaw('count(student_products.product_id) as register_count')
                ->leftJoin('student_products', 'products.id','=', 'student_products.product_id')
                ->groupBy('products.id', 'products.name', 'products.image', 'products.slug');
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
    
    static function getList()
    {
        $model = new Teacher;
        $result = array();
        $teachers = self::with('products')->get()->sortBy('full_name');
        foreach ($teachers as $teacher) {
            $cateIds = array();
            
            if ($teacher->products->toArray()) {
                foreach ($teacher->products as $product) {
                    !$product->category_id || in_array($product->category_id, $cateIds) ?: array_push($cateIds, $product->category_id); 
                }
            }
            
            $teacher->cateProd = !empty($cateIds) ? $model->getTextCate($cateIds) : null;
            $result[$teacher->id] = $teacher;
        }
        
        return $result;
    }
    
    /**
     * Get text categories product of teacher
     * 
     * @param array $cateIds
     * @return string
     */
    private function getTextCate($cateIds)
    {
        $cateNames = array();
        $textCate = '';
        $categories = ProductCategory::get()->toArray();
        
        if (!empty($categories)) {
            foreach ($categories as $category) {
                $cateNames[$category['id']] = $category['name']; 
            }
        }
        
        $first = true;
        foreach ($cateIds as $cateId) {
            $textCate = $first ? strtoupper($cateNames[$cateId]) : sprintf('%s - %s', strtoupper($textCate), strtoupper($cateNames[$cateId]));
            $first = false;
        }
        
        return $textCate;
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
            $teacher                   = $this->find($id);
            $teacher->full_name        = $data['full_name'];
            $teacher->image            = isset($data['image']) ? $data['image'] : $teacher->image;
            $teacher->intro            = $data['intro'];
            $teacher->slogan           = $data['slogan'];
            $teacher->page_title       = $data['page_title'];
            $teacher->meta_keyword     = $data['meta_keyword'];
            $teacher->meta_description = $data['meta_description'];
            $teacher->certified        = $data['certified'];
            $saved                     = $teacher->save();

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
