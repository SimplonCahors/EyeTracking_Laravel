@extends('layout.app')
@section('title')
    Liste des médias
@endsection
@section('content')
<h2>Liste des Médias</h2>

<button id="addMedia" class="btn btn-outline-secondary">Ajouter un média</button>

<ul>
	<li>Type d'images</li>
	<li>Nom du fichier</li>
	<li><img src="" alt="">Miniature</li>
	<button id="deleteMedia" class="btn btn-outline-secondary">Supprimer</button>
</ul> 


@endsection