<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ebookController;

use App\Http\Controllers\catController;

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
    return view('welcome');
});

//Route::get('/about', 'App\Http\Controllers\catController@about');

//Route::get('/team', 'App\Http\Controllers\catController@team');

//Route::get('/services', 'App\Http\Controllers\catController@services');


Route::get('/about', 'App\Http\Controllers\ebookController@about');
Route::get('/list', 'App\Http\Controllers\ebookController@list');


/*
//route pass variable as associative array
Route::get('/{name}', function ($name) {

    return view('welcome',['name'=>$name]);
});

/*
Route::get('/hello', function () {
    return view('hello');
});

/*
Route::get('/cat/morecats ', function () {
    return 'This is a cat ';
});
*/

/*
Route::get('/cat', function () {
    return view('layout/about.blade');
});
*/

/*
Route::get('/:{catname}/:{id}', function ($catname,$id) {
    return 'This is '. $catname. ' and the id is ' . $id;
});
*/
