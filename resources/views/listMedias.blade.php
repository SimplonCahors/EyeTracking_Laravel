@extends('layout.app')

@section('title')
    Liste des médias
@endsection

@section('content')
    <section id="sectionListMedia">
        <h2>Liste des Médias</h2>

        <button id="addMedia" class="btn btn-outline-secondary">Ajouter un média</button>

        <ul>
            <li>Type de fichier</li>
            <li>Nom du fichier</li>
            <li><img src="" alt="">Miniature</li>
            <button id="deleteMedia" class="btn btn-outline-secondary">Supprimer</button>
        </ul> 
        <ul>
            <li>Type de fichier</li>
            <li>Nom du fichier</li>
            <li><img src="" alt="">Miniature</li>
            <button id="deleteMedia" class="btn btn-outline-secondary">Supprimer</button>
        </ul> 
        <ul>
            <li>Type de fichier</li>
            <li>Nom du fichier</li>
            <li><img src="" alt="">Miniature</li>
            <button id="deleteMedia" class="btn btn-outline-secondary">Supprimer</button>
        </ul> 
    </section>
@endsection