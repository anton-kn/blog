<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

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

//Route::get('/php', [PostController::class, 'indexForPhp']);
//Route::get('/php/{id}', [PostController::class, 'takeForPhp']);
