<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

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

        $__productCategories = \App\ProductCategory::all();
        view()->share('__productCategories', $__productCategories);

        $__products = \App\Product::all();
        view()->share('__products', $__products);
        
        Validator::extend('phone', function($attribute, $value, $parameters, $validator) {
            return preg_match('%^(?:(?:\(?(?:00|\+)([1-4]\d\d|[1-9]\d?)\)?)?[\-\.\ \\\/]?)?((?:\(?\d{1,}\)?[\-\.\ \\\/]?){0,})(?:[\-\.\ \\\/]?(?:#|ext\.?|extension|x)[\-\.\ \\\/]?(\d+))?$%i', $value) && strlen($value) >= 10;
        });
        
        Validator::extend('postcode', function($attribute, $value, $parameters, $validator) {
            return preg_match('%^[0-9]+$%', $value) || is_null($value);
        });
        
        Validator::extend('old_password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, current($parameters));
        });
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
