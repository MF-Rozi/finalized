<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
Route::resource('posts',PostController::class);
Route::group(['prefix' => 'posts', 'as' => 'posts'.'.'],function(){
    Route::get('/one-to-one','PostController@imagePost')->name('one-to-one');
    Route::get('/one-to-many','PostController@userPost')->name('one-to-many');
    Route::get('/many-to-many','PostController@categoriesPost')->name('many-to-many');
});
