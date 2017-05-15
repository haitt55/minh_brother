<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(180);
        $__recentBlogs = \App\Models\Blog::orderBy('created_at', 'desc')->get()->take(3);
        view()->share('__recentBlogs', $__recentBlogs);

        $__parentBlogCategory = \App\Models\BlogCategory::where('parent_id', 0)->get();
        view()->share('__parentBlogCategory', $__parentBlogCategory);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
