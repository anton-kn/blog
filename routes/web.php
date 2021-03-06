<?php

use App\Http\Controllers\MyTestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
//use App\Http\Middleware\Authenticate;

// главаная страница
Route::get('/', function () {
   return view('home')->with('route','home');
})->name('home');

// главаная страница
Route::get('/about', function () {
   return view('about') ->with('route','about');
});

Route::get('/categories/{category:category}', [PostController::class, 'index']);
Route::get('/categories/{category:category}/{posts:id}', [PostController::class, 'showPost']);

Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login', [LoginController::class, 'store']);

Route::get('/admin/dashboard', [PostController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::post('/admin/dashboard', [PostController::class, 'publishPost']);



