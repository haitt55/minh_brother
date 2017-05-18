<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    // Authentication Routes...
    $this->get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    $this->post('login', 'Auth\LoginController@login');
    $this->get('logout', 'Auth\LoginController@logout')->name('admin.logout');

    // Registration Routes...
    $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('admin.register');
    $this->post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    $this->post('password/reset', 'Auth\ResetPasswordController@reset');

    //Students page
    $this->get('students', 'StudentsController@index')->name('admin.students');
    $this->get('students/show_payment/{id?}', 'StudentsController@showPayment')->name('admin.students.show_payment');
    $this->get('students/show_recieve/{id?}', 'StudentsController@showRecieve')->name('admin.students.show_recieve');
    $this->delete('students/destroy', 'StudentsController@destroy')->name('admin.students.destroy');

    Route::get('/home', 'HomeController@index');
    Route::group(['middleware' => 'auth.admin'], function () {
        Route::get('/', ['uses' => 'HomeController@index', 'as' => 'admin.home.index']);
    });

    Route::resource('products', 'ProductController', ['names' => [
            'index' => 'admin.products.index',
            'store' => 'admin.products.store',
            'create' => 'admin.products.create',
            'show' => 'admin.products.show',
            'edit' => 'admin.products.edit',
            'update' => 'admin.products.update',
            'destroy' => 'admin.products.destroy'
        ]]);
    Route::post('/products/store','ProductController@store');
    Route::resource('product_categories', 'ProductCategoryController', ['names' => [
            'index' => 'admin.product_categories.index',
            'create' => 'admin.product_categories.create',
            'show' => 'admin.product_categories.show',
            'edit' => 'admin.product_categories.edit',
            'update' => 'admin.product_categories.update',
            'destroy' => 'admin.product_categories.destroy'
        ]]);
    Route::post('/product_categories/store','ProductCategoryController@store');

    Route::delete('teachers/destroy', 'TeachersController@destroy')->name('admin.teachers.destroy');
    Route::resource('teachers', 'TeachersController', ['names' => [
            'index' => 'admin.teachers.index',
            'store' => 'admin.teachers.store',
            'create' => 'admin.teachers.create',
            'show' => 'admin.teachers.show',
            'edit' => 'admin.teachers.edit',
        ]]);
    Route::post('/teachers/store','TeachersController@store');
    Route::post('/teachers/update/{id?}','TeachersController@update')->name('admin.teachers.update');

    Route::resource('customers', 'CustomerController', ['names' => [
        'index' => 'admin.customers.index',
        'store' => 'admin.customers.store'
    ]]);
    Route::post('/customers/changeStatus',['uses' => 'CustomerController@changeStatus', 'as' => 'admin.customers.changeStatus']);

    Route::get('/about','AboutController@index')->name('admin.about.index');

    Route::resource('about', 'AboutController', ['names' => [
            'index' => 'admin.about.index',
            'store' => 'admin.about.store',
            'create' => 'admin.about.create',
            'edit' => 'admin.about.edit',
        ]]);
    Route::get('appSettings/general', ['uses' => 'AppSettingsController@general', 'as' => 'admin.appSettings.general']);
    Route::put('appSettings/general', ['uses' => 'AppSettingsController@updateGeneral', 'as' => 'admin.appSettings.updateGeneral']);
    Route::post('/products/store', 'ProductController@store');
    Route::resource('blogs', 'BlogController');
    Route::resource('blog-categories', 'BlogCategoryController');
});
// Web
Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home.index']);

Route::get('/layout', function() {
    return view('front.layouts.master');
});

Route::group(['namespace' => 'Front'], function() {
    Route::get('/ve-chung-toi', ['uses' => 'AboutController@index', 'as' => 'about.index']);
    Route::get('/giang-vien', ['uses' => 'TeachersController@index', 'as' => 'teachers.index']);
    Route::get('/giang-vien/{slug}', ['uses' => 'TeachersController@show', 'as' => 'teachers.show']);
    Route::get('/khoa-hoc', ['uses' => 'ProductsController@index', 'as' => 'products.index']);
    Route::get('/khoa-hoc/{slug}', ['uses' => 'ProductsController@show', 'as' => 'products.show']);
    Route::get('/danh-muc/{slug}', ['uses' => 'ProductCategoriesController@show', 'as' => 'product_categories.show']);
    Route::get('/blog/{slug}', ['uses' => 'BlogController@show', 'as' => 'blogs.show']);
    Route::get('/{slug}', ['uses' => 'BlogCategoryController@index', 'as' => 'blog-menu.index']);
    Route::get('/{parent_category}/{category}', ['uses' => 'BlogCategoryController@show', 'as' => 'blog-category.show']);
    Route::get('/{parent_category}/{category}/{slug_blog}', ['uses' => 'BlogController@show', 'as' => 'blog.show']);
    // Route::get('/blog/{slug}', ['uses' => 'BlogController@show', 'as' => 'blogs.show']);
});
