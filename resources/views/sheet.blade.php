@extends('layouts.app')

@section('title-block')О {{ $category }}
@endsection

@section('chapter'){{ Illuminate\Support\Str::upper($category) }}  <!-- //Переводим в верхний регистр -->
@endsection

<!--Статьи-->
@section('content-block')
    <div class="columns_column__list">
        <div class="columns_column__list_sections">
            <h2>Темы</h2>
            <ul class="columns_column__list_items">
                @foreach($posts as $post)
                    @if($route_id == $post->id)
                        <li class="columns_column__list_item" style="background-color: #f09f47"><a href="/categories/{{ $category}}/{{ $post->id }}">{{ $post->title }}</a></li>
                    @else
                        <li class="columns_column__list_item"><a href="/categories/{{ $category}}/{{ $post->id }}">{{ $post->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="columns_column">
        <div class="content">
            <h2>{{ $postOne->title }}</h2>
            <p>{{ $postOne->body }}</p>
            @if($postOne->code != 'null' && $postOne->code != '')
                <pre>
                    <code>
                        <p>{{ $postOne->code }}</p>
                    </code>
                </pre>
            @endif
        </div>
        <div class="columns_public">
            <p>Дата публикации: {{ $post->created_at->format('d-m-Y') }}</p>
        </div>
    </div>
@endsection
