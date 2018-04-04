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

// Home page
use App\User;

Route::get('/',[
    'uses' => 'PostController@index',
    'as' => 'blog'
]);

// Show post(with binding for seo friendly route)
Route::get('/blog/{post}',[
    'uses' => 'PostController@show',
    'as' => 'post.show'
]);

Route::get('/test',function (){
    $admin = User::findOrFail(1);
    dd($admin->can('delete other-posts'));
});

Auth::routes();

Route::get('/home', 'Backend\HomeController@index')->name('home');


Route::resource('/backend/blog', 'Backend\BlogController');