@extends('layout.app')

@section('title')
BD - {{ $comic->comic_title }}
@endsection

@section('content')


<section class="page-titles">
  <h2>{{ $comic->comic_title }}</h2>
  <p>/</p>
</section>



  
@endsection