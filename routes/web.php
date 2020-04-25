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


// Route::get('/', function () {
//     return view('dashboard');
// });

Auth::routes();
Route::get('/dashboard', 'HomeController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');




Route::group(['namespace' => 'Backend'], function(){
    Route::resource('/food', 'FoodController');
    Route::resource('/menu', 'MenuController');
    Route::get('/food-by-menu/{id}', 'FoodByMenuController@index');
    Route::get('/searchmenu', 'MenuController@search');
    Route::get('/searchfood', 'FoodController@search');
    // Route::get('/searchfoodbymenu', 'FoodByMenuController@search');
    // Route::resource('/contact', 'ContactusController');

});

Route::group(['namespace' => 'Frontend'], function(){
    Route::get('/index','HomeController@index');
    Route::get('/gallery','GalleryController@index');
    Route::resource('/feedbackus','ContactusController');
    Route::get('/contact','ContactusController@home');
    Route::get('/menus','MenuController@index');
    Route::get('/food-by/menu-{id}', 'MenuController@find');
});
