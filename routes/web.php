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

/* Route->Controller by auth */

Auth::routes();
Route::get('/admin', 'HomeController@index');
Route::resource('/users', 'UserController');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/edit', '\App\Http\Controllers\Auth\RegisterController@edit');


/* Route->Controller by Admin panel */

Route::group(['namespace' => 'Backend', 'middleware' => 'auth'], function(){
    Route::resource('/food', 'FoodController');
    Route::resource('/menu', 'MenuController');
    Route::get('/food-by-menu/{id}', 'FoodByMenuController@index');
    Route::get('/searchmenu', 'MenuController@search');
    Route::get('/searchfood', 'FoodController@search');
    Route::resource('/image', 'ImageController');
});


/* Route->Controller by User Interface */

Route::group(['namespace' => 'Frontend'], function(){
    Route::get('/index','HomeController@index');
    Route::get('/gallery','GalleryController@index');
    Route::resource('/feedback','ContactusController');
    Route::get('/contact','ContactusController@home');
    Route::get('/menus','MenuController@index');
    Route::get('/food-by/menu-{id}', 'MenuController@find');
});
