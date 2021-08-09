<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Category $category)
    {
//        dd($category->posts[0]->title);
        return view('sheet' ,[
            'posts' => $category->posts,
            'post' => $category->posts->first(), //возвращаем первую статью
            'category' => $category->category
        ]);
    }

    public function store(Category $category, Post $posts)
    {
//        dd($category);
        return view('sheet', [
            'posts' => $category->posts,
            'post' => $posts,
            'category' => $category->category
        ]);
    }
}
