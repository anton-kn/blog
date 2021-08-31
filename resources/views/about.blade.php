@extends('layouts.app')
@section('title-block')Обо мне@endsection
@section('chapter')Обо мне@endsection

@section('content-block')
   <div class="columns_column">
      <div class="content">
         @include('inc.about-me')
      </div>
   </div>
@endsection
