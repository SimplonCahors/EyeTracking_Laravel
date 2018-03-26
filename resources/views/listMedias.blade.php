@extends('layout.app')
@section('title')
    Liste des médias
@endsection
@section('content')
<section id="sectionListMedia">

	<h2>Liste des Médias</h2>
	<button id="addMedia" class="btn btn-outline-secondary">Ajouter un média</button>

<!-- manque le foreach pour récupérer chaque média dans la BDD. Une seule <div col-s> sera nécessaire dans le foreach -->

	<div class="row justify-content-center">

	  <div class="col-s col-auto">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="/img/plancheBD.JPG" alt="Miniature">
		  <div class="card-body">
		    <h5 class="card-title">Nom du fichier</h5>
		    <p class="card-text">Type de fichier</p>
		    <a href="#" id="deleteMedia" class="btn btn-primary">Supprimer</a>
		  </div>
		</div>
	  </div>

	    <div class="col-s col-auto">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="/img/plancheBD.JPG" alt="Miniature">
		  <div class="card-body">
		    <h5 class="card-title">Nom du fichier</h5>
		    <p class="card-text">Type de fichier</p>
		    <a href="#" id="deleteMedia" class="btn btn-primary">Supprimer</a>
		  </div>
		</div>
	  </div>

	    <div class="col-s col-auto">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="/img/plancheBD.JPG" alt="Miniature">
		  <div class="card-body">
		    <h5 class="card-title">Nom du fichier</h5>
		    <p class="card-text">Type de fichier</p>
		    <a href="#" id="deleteMedia" class="btn btn-primary">Supprimer</a>
		  </div>
		</div>
	  </div>

	    <div class="col-s col-auto">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="/img/plancheBD.JPG" alt="Miniature">
		  <div class="card-body">
		    <h5 class="card-title">Nom du fichier</h5>
		    <p class="card-text">Type de fichier</p>
		    <a href="#" id="deleteMedia" class="btn btn-primary">Supprimer</a>
		  </div>
		</div>
	  </div>

	    <div class="col-s col-auto">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="/img/plancheBD.JPG" alt="Miniature">
		  <div class="card-body">
		    <h5 class="card-title">Nom du fichier</h5>
		    <p class="card-text">Type de fichier</p>
		    <a href="#" id="deleteMedia" class="btn btn-primary">Supprimer</a>
		  </div>
		</div>
	  </div>

	    <div class="col-s col-auto">
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="/img/plancheBD.JPG" alt="Miniature">
		  <div class="card-body">
		    <h5 class="card-title">Nom du fichier</h5>
		    <p class="card-text">Type de fichier</p>
		    <a href="#" id="deleteMedia" class="btn btn-primary">Supprimer</a>
		  </div>
		</div>
	  </div>

	</div>

</section>
@endsection