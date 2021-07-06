<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   return view('home');
});

Route::get('/laravel', function () {
   $path = file_get_contents(__DIR__. "/../resources/views/posts/laravel/first-post.html");
   return view('aboutlaravel', [
      'post' =>$path
   ]);
});

Route::get('/laravel/{part}', function ($slug) {
   $path = __DIR__. "/../resources/views/posts/laravel/{$slug}.html";

   if (! file_exists($path)) {
      // dd($path);
      return redirect('/');
   }

   $path = file_get_contents($path);
   return view('aboutlaravel', [
      'post' => $path
   ]);
});
