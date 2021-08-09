@extends('layouts.app')

@section('title-block')О {{ $category }}
@endsection

@section('chapter'){{ Illuminate\Support\Str::upper($category) }}  <!-- //Переводим в верхний регистр -->
@endsection

<!--Статьи-->
@section('content-block')
    <div class="columns_column">
        <div class="content">
            <h2>{{ $post->title }}</h2>
            {{ $post->body }}
        </div>
    </div>
    <div class="columns_column__list">
        <div class="columns_column__list_sections">
            <h2>Темы</h2>
            <ul class="columns_column__list_items">
                @foreach($posts as $post)
                    <li class="columns_column__list_item"><a href="/categories/{{ $category
                    }}/{{ $post->id }}">{{ $post->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
