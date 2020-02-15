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

use Illuminate\Support\Facades\Route;

route::get('/', function () {
    return view('welcome');
});

Auth::routes();


route::get('/home', 'HomeController@index')->name('home');


route::group(['middleware' => ['auth', 'admin']], function () {
    route::get('/admin', function () {
        return view('dashboard.layouts.master');
    });
    route::resource('admin/dashboard', 'dashboardController');
    route::resource('admin/categories', 'CategoryController');
    route::resource('admin/user', 'UserController');
    route::resource('admin/posts', 'PostController');
});



Route::group(['middleware' => ['auth', 'user']], function () {
    Route::resource('/users', 'UsersController');
//    Route::resource('/category', 'UcatController');
    Route::resource('/user/profile', 'ProfController');
  //  route::resource('/search/Ucategory','UScatController');
    route::get('/search/category/{id}','categController@index')->name('cat.search');
    route::get('/show/profile/{id}','proController@index')->name('pro.show');
    route::resource('/post/comment','CommentController');


});


    Route::resource('roles','ACL\RoleController');
    Route::resource('usersss','ACL\UserController');
    Route::resource('products','ACL\ProductController');



 