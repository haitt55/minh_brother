<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Intervention\Image\Facades\Image;

class BlogCategory extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'type',
        'parent_id',
        'active'
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\BlogCategory', 'parent_id');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\BlogCategory', 'parent_id', 'id');
    }

    public static function getTree()
    {
        $categories = BlogCategory::where('parent_id', '=', 0)->get()->sortBy('name');
        $categoryOptions = [];
        $index = 0;
        foreach ($categories as $category) {
            $index++;
            $category->addTreeCategory($categoryOptions, $index);
        }

        return $categoryOptions;
    }

    public function addTreeCategory(&$categoryOptions, $index) {
        $level = $this->getLevel();
        if ($this->parent_id != 0) {
            $printLevel = '';
            for ($i = 0; $i < $level; $i++) {
                $printLevel .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            }
            $name = $printLevel . $index . '.' . $this->name;
        } else {
            $name = $index . '.' . $this->name;
        }
        $this->name = $name;
        $categoryOptions[] = $this;
        $childs = $this->childs->sortBy('name');
        if ($childs) {
            $index = 0;
            foreach ($childs as $child) {
                $index++;
                $child->addTreeCategory($categoryOptions, $index);
            }
        }
        return $categoryOptions;
    }

    public static function getCategoryOptions($id = null)
    {
        $categories = BlogCategory::where('parent_id', '=', 0)->get()->sortBy('name');
        $categoryOptions = [];
        foreach ($categories as $category) {
            $categoryOptions[$category['id']] = $category['name'];
        }
        if (!is_null($id)) {
            unset($categoryOptions[$id]);
        }

        return $categoryOptions;
    }

    public function getLevel() {
        if ($this->parent_id == 0) {
            $level = 0;
        } else {
            $level = 1;
            $parent = $this->parent;
            while ($parent->parent_id != 0) {
                $level ++;
                $parent = $parent->parent;
            }
        }
        return $level;
    }

    public static function getChildCategoryOptions()
    {
        $categories = BlogCategory::where('parent_id', '!=', 0)->get()->sortBy('name');
        $categoryOptions = [];
        foreach ($categories as $category) {
            $categoryOptions[$category['id']] = $category['name'];
        }

        return $categoryOptions;
    }
}
