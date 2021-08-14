<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Category $category)
    {
//        dd($category->posts[0]->title);
        return view('sheet' ,[
            'posts' => $category->posts,
            'post' => $category->posts->first(), //возвращаем первую статью
            'category' => $category->category
        ]);
    }

    public function showPost(Category $category, Post $posts)
    {
//        dd($category);
        return view('sheet', [
            'posts' => $category->posts,
            'post' => $posts,
            'category' => $category->category
        ]);
    }
    // окно для публикации статьи
    public function dashboard()
    {
        return view('admin.dashboard', [
            'categories' => Category::all()
        ]);
    }

    public function publishPost(Request $request)
    {
//        dd($request->category_id);
        $this->validate($request, [
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        Post::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'excerpt' =>$request->excerpt,
            'body' => $request->body
        ]);

        return redirect()->route('dashboard')->with('status', 'Запись прошла успешно');
    }
}
