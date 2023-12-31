<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/posts', PostController::class);
Route::get('/posts/create/{post}', [PostController::class, 'create'])
->name('create');
Route::post('/posts/store/{post}', [PostController::class, 'store'])
->name('store');
Route::get('/home', [HomeController::class, 'index'])->name('home');
