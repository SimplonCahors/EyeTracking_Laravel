@extends('layout.app')

@section('title')
    Board - {{ $comic->comic_title }} / p - {{ $board->board_number }}
@endsection


@section('content')
    <section class="page-titles">
            <h2>{{ $comic->comic_title }} - Planches n° {{ $board->board_number }}</h2>
            <p>/</p>
        </section>
        <div class="board-view">
            <img src="{{ $board->board_image }}">
        </div>
        <a class="btn-add-bd" href="{{route('comics_create')}}"><i class="material-icons">add</i><span>Ajouter une area</span></a>
    
@endsection


