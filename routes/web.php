<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\postscontroller;


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

//Route::resource('post','App\Http\Controllers\postscontroller');

Route::get('post',[Postscontroller::class,'index'])->name('post.index ');
Route::post('post',[Postscontroller::class,'store'])->name('post.store ');
Route::get('post/create',[Postscontroller::class,'create'])->name('post.create ');
Route::get('post/{post}',[Postscontroller::class,'show'])->name('post.show');
Route::put('post/{post}',[Postscontroller::class,'update'])->name('post.update')->whereNumber('post');
Route::delete('post/{post}',[Postscontroller::class,'destroy'])->name('post.delete')->whereNumber('post');
Route::get('post/{post}',[Postscontroller::class,'edit'])->name('post.edit')->whereNumber('post');