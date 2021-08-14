<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

//    protected $with = ['category'];
    protected $fillable = ['category_id', 'title', 'excerpt', 'body'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
