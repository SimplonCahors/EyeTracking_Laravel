@extends('layout.app')

@section('title')
Ajouter Bande dessinée
@endsection

@section('content')
<div class="container modify">

    <form method="POST" enctype="multipart/form-data" action="{{ action('ComicsController@store') }}" >
        @csrf
        <section class="page-titles">
            <h2>Ajouter une Bande Dessinée</h2>
            <p>/</p>
        </section>
        @csrf
        <label for="titre">Titre de la Bande Dessinée :</label>
        <input type="text" id="titre" name="titre"  required/>

        <label for="editeur"> Nom de l'éditeur :</label>
        <input type="text" id="editeur" name="editeur" required />

        <label for="auteur">Nom de l'auteur :</label>
        <input type="text" id="auteur" name="auteur" required />

        <label for="miniature">Miniature :</label>
        <input type="file" id="miniature" name="miniature" required value="test" placeholder="test"/>
        <input class="btn-outline" type="submit" value="AJOUTER" id="ajouter"/>

    </form>
</div>
@endsection

