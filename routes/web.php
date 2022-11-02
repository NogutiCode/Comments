<?php

use App\Http\Controllers\PublicController;
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

Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');
