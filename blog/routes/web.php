<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
// главаная страница
Route::get('/', function () {
   return view('home');
});

// Страница со статьями о laravel
Route::get('/laravel', function () {
    $path = 'laravel'; // папка из resources/posts/laravel
    return view('aboutLaravel', [
        'post' => Post::firstPost($path),
        'path' => $path,
        'allPosts' => Post::all($path),
        'slugOne' => null
    ]);
});

Route::get('/laravel/{slug}', function ($slug) {
    $path = 'laravel';
    $file = Post::find($path, $slug);
//       ddd($file);
    return view('aboutLaravel', [
        'post' => $file,
        'path' => $path,
        'allPosts' => Post::all($path),
        'slugOne' => $slug
    ]);
});

// Страница со статьями о PHP
Route::get('/php', function () {
    $path = 'php'; // папка раздела
   return view('aboutPhp', [
       'post' => Post::firstPost($path),
       'path' => $path,
       'allPosts' => Post::all($path)
   ]);
});

   Route::get('/php/{slug}', function ($slug) {
       $path = 'php';
       $file = Post::find($path, $slug);
//       ddd($file);
       return view('aboutPhp', [
           'post' => $file,
           'path' => $path,
           'allPosts' => Post::all($path)
       ]);
   });

// главаная страница
Route::get('/about', function () {
   return view('about');
});
