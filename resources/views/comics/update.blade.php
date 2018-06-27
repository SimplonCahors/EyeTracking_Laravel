@extends('layout.app')

@section('title')
Modifier Bande dessinée
@endsection

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

@section('content')

@if ($message = Session::get('add'))
<div class="alert alert-success alert-dismissible" role="alert">
  {{ $message }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


<div class="container modify">
    <form method="POST" enctype="multipart/form-data" action="{{ action('ComicsController@update', [$comic->comic_id]) }}">
        @csrf

        <section class="page-titles">
            <h2>Modifier la Bande Dessinée</h2>
            <p>/</p>
        </section>

        <label for="titre">Titre de la Bande Dessinée :</label>
        <input type="text" id="titre" name="titre" value="{{$comic->comic_title}}"/>
        
        <label for="editeur"> Nom de l'éditeur :</label>
        <input type="text" id="editeur" name="editeur" value="{{$comic->comic_publisher}}"/>

        <label for="auteur">Nom de l'auteur :</label>
        <input type="text" id="auteur" name="auteur" value="{{$comic->comic_author}}"/>

        <p class="label-miniature">Miniature :</p>
        <p> Miniature enregistrée : {{$comic->comic_miniature_url}} </p>
        <div class="contain-miniature">
            <label class="label-browse" for="miniature">Rechercher</label>
            <input class="inputfile" type="file" id="miniature" name="miniature" />
        </div>

        <div class="material-toggle">
            @if($comic->comic_publication === 1)
            <input id="publication" name="publication" type="checkbox" checked="checked" />
            @else
            <input id="publication" name="publication" type="checkbox" />
            @endif
            <label for="publication" class="label-amber"></label>
            <p class="label-publication">Publication On/Off</p>
        </div>

        <input class="btn-outline" type="submit" value="MODIFIER" />

        <div id="delete-group">
            <h4 id="delete-bd-title">Supprimer la Bande Dessinée</h4>
            <a id="delete-bd-icon" href="{{route('comic_delete',[$comic->comic_id])}}"><i class="material-icons catalogue">delete_forever</i></a>
        </div>

    </form>


    <section class="boards-index">

        <section class="page-titles">
            <h2>Gestion des planches</h2>
            <p>/</p>
        </section>

        <button class="btn-outline" id="" >Ajouter une planche</button>
        <form method="POST" enctype="multipart/form-data" action="{{ action('BoardsController@store', [$comic->comic_id]) }}">
            @csrf
            <div id="form-add-board">
                <label for="numero-board">Numéro de la planche :</label>
                @if(count($lastpage) !== 0)
                <input type="number" id="numero-board" name="numero-board" value="{{ $lastpage->board_number + 1 }}"/>
                @else
                <input type="number" id="numero-board" name="numero-board" value="1"/>
                @endif

                <label for="board-image">Image de la planche : </label>
                <input type="file" id="board-image" name="board-image" value=""/>
            </div>
            <input class="btn-outline" type="submit" value="AJOUTER" />
        </form>

        <section class="page-titles">
            <h2>Liste des planches</h2>
            <p>/</p>
        </section>

        <div class="gallery-boards">
            @foreach($boards as $board)
                <div class="small-card">
                    <a href="{{ route('board-edit',[$comic->comic_id, $board->board_id]) }}">
                    <img src="{{ $board->board_image }}">
                    <p>p - {{ $board->board_number }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

</div>
@endsection