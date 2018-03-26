
@extends('layout.app')

@section('title')
Modifier Bd
@endsection

@section('content')
<div class=" container modify"> 
<form method="POST">
     <h4>Mofidier les informations de la BD</h4>
    @csrf
    <label for="titre">Titre de la BD</label>
    <input type="text" id="titre" name="titre" value="{{$comic->com_title}}"/>
 
    <label for="editeur"> Nom de l'éditeur</label>
    <input type="text" id="editeur" name="editeur" value="{{$comic->com_publisher}}"/>
    
    <label for="auteur">Nom de l'auteur</label>
    <input type="text" id="auteur" name="auteur" value="{{$comic->com_author}}"/>

     <label for="miniature">miniature :</label>
    <input type="file" id="miniature" name="miniature" required />

    <input type="submit" value="Appliquer les modifications" />

</form>     

</div>
@endsection