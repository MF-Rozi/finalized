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
    return redirect(route('posts.index'));
});
Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/ImagePost',[PostController::class,'imagePost'])->name('posts.one-to-one');
Route::get('/posts/UserPost',[PostController::class,'userPost'])->name('posts.one-to-many');
Route::get('/posts/CategoryPost',[PostController::class,'categoriesPost'])->name('posts.many-to-many');
