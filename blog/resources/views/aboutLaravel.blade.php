@extends('layouts.app')

@section('title-block')О Laravel
@endsection

@section('chapter')Laravel
@endsection

<!--Статьи-->
@section('content-block')
    <div class="columns_column">
        <div class="content">
            <h2>{!!$post->title!!}</h2>
            {!!$post->body!!}
        </div>
    </div>
    <div class="columns_column__list">
        <div class="columns_column__list_sections">
            <h2>Темы</h2>
            <ul class="columns_column__list_items">
                @foreach($allPosts as $post)
                    @if($slugOne == $post->slug)
                        <li style="background-color: #f09f47;" class="columns_column__list_item"><a href="/{!! $path !!}/{!! $post->slug
                    !!}">{!! $post->title !!}</a></li>
                    @elseif( $slugOne == null)
                        <li class="columns_column__list_item"><a href="/{!! $path !!}/{!! $post->slug
                    !!}">{!! $post->title !!}</a></li>
                    @else
                        <li class="columns_column__list_item"><a href="/{!! $path !!}/{!! $post->slug
                    !!}">{!! $post->title !!}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
@endsection
