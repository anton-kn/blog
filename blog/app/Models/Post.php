<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\Types\Self_;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title;
    public $date;
    public $excerpt;
    public $body;
    public $slug;

    public function __construct($title, $date, $excerpt, $body, $slug)
    {
        $this->title = $title;
        $this->date = $date;
        $this->excerpt = $excerpt;
        $this->body = $body;
        $this->slug = $slug;
    }


    public static function all($path)
    {
        $files = File::files(resource_path("posts/{$path}/"));
        return collect($files)
            ->map(function ($file){
                return YamlFrontMatter::parseFile($file);
            })
            ->map(function($document){
                return new Post(
                    $document->title,
                    $document->date,
                    $document->excerpt,
                    $document->body(),
                    $document->slug
                );
            })
            ->sortDesc();
    }
    public static function find($path, $slug)
    {
        return static::all($path)->firstWhere('slug', $slug);
    }
//    Возвращаем первую (свежую) статью
    public static function firstPost($path)
    {
        return static::all($path)->first();
    }
}
