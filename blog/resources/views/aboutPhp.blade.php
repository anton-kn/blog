@extends('layouts.app')

@section('title-block')О PHP
@endsection

@section('chapter')PHP
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
              @foreach($all as $post)
                  <li class="columns_column__list_item"><a href="/{!! $path !!}/{!! $post->slug !!}">{!! $post->title
              !!}</a></li>
              @endforeach
          </ul>
      </div>
   </div>
@endsection
