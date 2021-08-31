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
            'postOne' => $category->posts->first(), //возвращаем первую статью
            'category' => $category->category
        ])->with('route', $category->category)->with('route_id', $category->posts->first()->id);
    }

    public function showPost(Category $category, Post $posts)
    {
//        dd($posts->body);
        return view('sheet', [
            'posts' => $category->posts,
            'postOne' => $posts,
            'category' => $category->category
        ])->with('route', $category->category)->with('route_id', $posts->id);
    }
    // окно для публикации статьи
    public function dashboard()
    {
        return view('admin.dashboard', [
            'categories' => Category::all()
        ]);
    }
    // записываем статью в БД
    public function publishPost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'code' => 'required'
        ]);

        Post::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'code' => $request->code
        ]);

        return redirect()->route('dashboard')->with('status', 'Запись прошла успешно');
    }
}
