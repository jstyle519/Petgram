{{-- 記事の詳細画面 --}}
@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="container">
    @include('articles.card')
  </div>
@endsection