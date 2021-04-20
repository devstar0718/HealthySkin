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

Route::get('/', function () {
    return view('index');
});

//Route::get('/products', function () {
//    return view('products');
//});

//Route::get('/blog', function () {
//    return view('blog');
//});

Route::get('/about', function () {
    return view('about');
});

Route::get('/term', function () {
    return view('term');
});

Route::get('/policy', function () {
    return view('policy');
});

//Route::get('/details', function () {
//    return view('details');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/api/signup', 'API\SignController@signUP');
Route::post('/api/signin', 'API\SignController@signIN');
Route::post('/api/algo1', 'API\ImageController@algorithm1');
Route::post('/api/algo2', 'API\ImageController@algorithm2');
Route::post('/api/results', 'API\ImageController@getProcessingResults');

Route::get('/products', 'ProductController@index');
Route::post('/products/filter', 'ProductController@filter');
Route::get('/blog', 'PostController@index');
Route::get('/blog/{id}', 'PostController@index');
Route::post('/blog/filter', 'PostController@filter');

Route::get('/admin', 'Admin\ProductController@index');
Route::get('/admin/product', 'Admin\ProductController@index');
Route::get('/admin/product/item', function () {
    return view('admin.product_edit');
});
Route::post('/admin/product/create_update', 'Admin\ProductController@CreateOrUpdate');
Route::post('/admin/product/read', 'Admin\ProductController@Read');
Route::post('/admin/product/delete', 'Admin\ProductController@Delete');

Route::get('/admin/blog', 'Admin\PostController@index');
Route::get('/admin/blog/item', function () {
    return view('admin.blog_edit');
});
Route::post('/admin/blog/create_update', 'Admin\PostController@CreateOrUpdate');
Route::post('/admin/blog/read', 'Admin\PostController@Read');
Route::post('/admin/blog/delete', 'Admin\PostController@Delete');

Route::post('/subscribe', 'EmailController@subscribe');
Route::get('/admin/subscribe', 'Admin\EmailController@index');
