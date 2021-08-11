<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

// главаная страница
Route::get('/', function () {
   return view('home');
});

// главаная страница
Route::get('/about', function () {
   return view('about');
});

Route::get('/categories/{category:category}', [PostController::class, 'index']);
Route::get('/categories/{category:category}/{posts:id}', [PostController::class, 'store']);

Route::get('/admin/login', [LoginController::class, 'index'])->name('register');
Route::post('/admin/login', [LoginController::class, 'store']);
