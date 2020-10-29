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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/test', 'TestController');
Route::resource('/adduser', 'AdduserController');
Route::resource('/', 'AbtController');
Route::get('/map', 'AbtController@home');


Route::get('/detail','AbtController@Showdetail')->name('detail');

Route::get('/detail/{name}','AbtController@Showdetail');
Route::post('/detail/{name}','AbtController@Showdetail');

Route::get('/updata','AbtController@update')->name('data.update');
Route::post('/updata','AbtController@update')->name('data.update');

Route::get('/delete','AbtController@delete')->name('data.delete');

Route::get('/{action}','AbtController@Querydata')->name('data.Querydata');

// Route::group(['middleware'=>'role:super-admin'],function(){
    Route::resource('admin/permission', 'Admin\\PermissionController');
    Route::resource('admin/role', 'Admin\\RoleController');
    Route::resource('admin/user', 'Admin\\UserController');
// });
