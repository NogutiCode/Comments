<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'index'])->name('index');
Route::get('/pages/page1', [PublicController::class, 'page1'])->name('page1');
Route::get('/pages/page2', [PublicController::class, 'page2'])->name('page2');



Auth::routes();

//Route::get('/home', [PostController::class, 'index'])->name('home');
//Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
//Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
//Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
//Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
//Route::post('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
//Route::post('/posts/{post}/delete', [PostController::class, 'destroy'])->name('posts.destroy');
Route::resource('posts', PostController::class);
