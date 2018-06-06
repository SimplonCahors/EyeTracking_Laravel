@extends('layout.app')

@section('title')
    Modifier Bd
@endsection

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

@section('content')
    
    <div class=" container modify">
        <form method="POST">
            @csrf

            <div id="delete-group">
                <h4 id="delete-bd-title">Supprimer la BD</h4>
                <a id="delete-bd-icon" href="{{route('comic_delete',[$comic->com_oid])}}"><i class="material-icons catalogue">delete_forever</i></a>
            </div>

            <h4>Modifier les informations de la BD</h4>

            <label for="titre">Titre de la BD</label>
            <input type="text" id="titre" name="titre" value="{{$comic->com_title}}"/>
        
            <label for="editeur"> Nom de l'éditeur</label>
            <input type="text" id="editeur" name="editeur" value="{{$comic->com_publisher}}"/>
            
            <label for="auteur">Nom de l'auteur</label>
            <input type="text" id="auteur" name="auteur" value="{{$comic->com_author}}"/>

            <label for="miniature">Miniature :</label>
            <input type="file" id="miniature" name="miniature" />

            <input type="submit" />

        </form>

        <form>
            <h4>Modifier une page </h4>
            <label for="page">Selectionner une page</label>

            <select id="page">
                <option selected value="0">choisissez une page</option>
                <option value="1">Nom/numero de la page</option>
                <option value="2">Nom/numero de la page</option>
                <option value="3">Nom/numero de la page</option>
                <option value="4">Nom/numero de la page</option>
            </select>

            <button>Aller à la modification de la page</button>
        </form>
    </div>
@endsection