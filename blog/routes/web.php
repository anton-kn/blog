<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
// главаная страница
Route::get('/', function () {
   return view('home');
});

// Страница со статьями о laravel
Route::get('/laravel', function () {
   $path = file_get_contents(__DIR__ . "/../resources/views/posts/laravel/arraymap.html");
   return view('aboutlaravel', [
      'post' =>$path,
      'link' => 'laravel'
   ]);
});

   Route::get('/laravel/{part}', function ($slug) {
      $path = __DIR__ . "/../resources/views/posts/laravel/{$slug}.html";

      if (! file_exists($path)) {
         // dd($path);
         return redirect('/');
      }

      $path = file_get_contents($path);
      return view('aboutlaravel', [
         'post' => $path,
         'link' => 'laravel'
      ]);
   });

// Страница со статьями о PHP
Route::get('/php', function () {
    $path = 'php';
//    ddd(Post::all($path)[0]);
   return view('aboutPhp', [
       'post' => Post::firstPost($path),
       'path' => $path,
       'all' => Post::all($path)
   ]);
});

   Route::get('/php/{part}', function ($slug) {
      $path = __DIR__ . "/../resources/views/posts/php/{$slug}.html";

      if (! file_exists($path)) {
         // dd($path);
         return redirect('/');
      }

      $path = file_get_contents($path);
      return view('aboutPHP', [
         'post' => $path,
         'link' => 'php'
      ]);
   });

// главаная страница
Route::get('/about', function () {
   return view('about');
});
