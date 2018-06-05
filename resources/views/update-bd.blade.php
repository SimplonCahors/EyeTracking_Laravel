@extends('layout.app')

@section('title')
    Modifier Bd
@endsection

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

@section('content')

    <div class=" container modify">
    </div>
    <div class=" container modify">
        <form method="POST">
            @csrf

            <div id="delete-group">
                <h4 id="delete-bd-title">Supprimer la BD</h4>
                <a id="delete-bd-icon" href=""><i class="material-icons catalogue">delete_forever</i></a>
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
        
        <a href="{{route('delete-bd/',[$comic->com_oid])}}"><button>supprimer la BD</button></a>
        
        <form>
            <h4>Edition des pages existantes :</h4>

            <!-- watch as the buttons can mess up with the <a> as they reload the page by default-->
            @foreach ($page as $pages)
                <div id="div{{$pages->pag_oid}}" style="float:left">
                    <img src="/storage/images/pages/{{$pages->pag_image}}" alt="" style="width:200px; height:auto;">
                    <p>page {{$pages->pag_number}}</p>
                    <!-- change the url here to link to the real edition page -->
                    <a class="edit" id="edit{{$pages->pag_oid}}" href="{{ url('/edit/' . $pages->pag_oid . '') }}"><input type="button" value="Editer"></a>
                    <a class="remove" id="{{$pages->pag_number}}" ><input type="button" value="Supprimer"></a>


                    <!-- Watch as some css is used here and have to be moved-->
                    <a id="confirm{{$pages->pag_number}}" style="display:none;" href="/comics/delete/{{$comic->com_oid}}/{{$pages->pag_oid}}"></a>

                </div>
            @endforeach
        </form>
    </div>
@endsection