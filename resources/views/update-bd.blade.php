
@extends('layout.app')

@section('title')
Modifier Bd
@endsection

@section('content')
<div class=" container modify"> 
<form method="POST">
     <h4>Mofidier les informations de la BD</h4>
    @csrf
{{--     <label for="titre">Titre de la BD</label>
    <input type="text" id="titre" name="titre" value="{{$comic->com_title}}"/>
 
    <label for="editeur"> Nom de l'éditeur</label>
    <input type="text" id="editeur" name="editeur" value="{{$comic->com_publisher}}"/>
    
    <label for="auteur">Nom de l'auteur</label>
    <input type="text" id="auteur" name="auteur" value="{{$comic->com_author}}"/>

    <input type="submit" value="Appliquer les modifications" /> --}}
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