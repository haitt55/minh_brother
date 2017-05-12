<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Intervention\Image\Facades\Image;

class Blog extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'blog_category_id',
        'name',
        'image',
        'slug',
        'content',
        'type',
        'page_title',
        'meta_keyword',
        'meta_description',
    ];

    public static function createBlog($request)
    {
        $imagePath = config('custom.blogs.image_path');
        $image = $request->file('image');
        $data = [
            'name' => $request->get('name'),
            'blog_category_id' => $request->get('blog_category_id'),
            'slug' => str_slug($request->get('name')),
            'content' => $request->get('content'),
            // 'type' => $request->get('type'),
            'type' => 'blog',
            'page_title' => $request->get('page_title'),
            'meta_keyword' => $request->get('meta_keyword'),
            'meta_description' => $request->get('meta_description'),
        ];
        if ($image) {
            $name = time() . '-' . create_slug($image->getClientOriginalName());
            $extention = $image->getClientOriginalExtension();
            $filename = "{$name}.{$extention}";
            Image::make($image->getRealPath())->save(public_path($imagePath . '/' . $filename));
            $data['image'] = $imagePath . '/' . $filename;
        }

        return Blog::create($data);
    }

    public static function updateBlog($request, $blog)
    {
        $imagePath = config('custom.blogs.image_path');
        $image = $request->file('image');
        $oldImage = $blog->image;
        $data = [
            'name' => $request->get('name'),
            'blog_category_id' => $request->get('blog_category_id'),
            'slug' => str_slug($request->get('name')),
            'content' => $request->get('content'),
            // 'type' => $request->get('type'),
            'type' => 'blog',
            'page_title' => $request->get('page_title'),
            'meta_keyword' => $request->get('meta_keyword'),
            'meta_description' => $request->get('meta_description'),
        ];
        if ($image) {
            $name = time() . '-' . create_slug($image->getClientOriginalName());
            $extention = $image->getClientOriginalExtension();
            $filename = "{$name}.{$extention}";
            Image::make($image->getRealPath())->save(public_path($imagePath . '/' . $filename));
            $data['image'] = $imagePath . '/' . $filename;
            // delete old image
            if ($oldImage && file_exists(public_path($oldImage))) {
                unlink(public_path($oldImage));
            }
        }

        return $blog->update($data);
    }
}
