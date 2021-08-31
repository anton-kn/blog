@extends('layouts.app')
@section('title-block')О сайте@endsection
@section('chapter')Hello, world! Привет!@endsection

@section('content-block')
   <div class="columns_column">
      <div class="content">
         @include('inc.contenthome')
      </div>
   </div>
@endsection
