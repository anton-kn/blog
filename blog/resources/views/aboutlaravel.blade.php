@extends('layouts.app')

@section('title-block')О Laravel
@endsection

@section('chapter')Laravel
@endsection

<!-- Передается в questions.blade.php строка для уточнения ссылки -->
@section('link')
{!!$link!!}
@endsection

<!--Статьи-->
@section('content-block')
   <div class="columns_column">
      <div class="content">
         {!!$post!!}
      </div>
   </div>
   <div class="columns_column__list">
      <div class="columns_column__list_sections">
      @include('inc.questions')
      </div>
   </div>
@endsection
