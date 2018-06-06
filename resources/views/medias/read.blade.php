@extends('layout.app')
@section('title')

    Liste des médias

    Medias

@endsection
@section('content')

<section id="sectionListMedia">

	<h2>Liste des Médias</h2>
	<a href="/medias-upload" id="addMedia" class="btn btn-outline-secondary">Ajouter un média</a>

<!-- manque le foreach pour récupérer chaque média dans la BDD. Une seule <div col-s> sera nécessaire dans le foreach -->

	<div class="row justify-content-center">

	@foreach ($medias as $media)

	 
		<div class="card" style="width: 18rem;">

		  @if ($media->med_type == 'img')
			<img class="card-img-top " src="storage/{{ $media->med_path }}" alt="Miniature">
		@endif

		@if ($media->med_type == 'video')
			<!-- peut être besoin de faire en fonction des types de video(attribut type="") -->
			<video width="320" height="240" controls>
				<source src="storage/{{ $media->med_path }}" >
				Your browser does not support the video tag.
			</video> 
		@endif
		
		@if ($media->med_type == 'son')
			<audio controls>
				<source src="storage/{{ $media->med_path }}">
				Your browser does not support the audio element.
			</audio> 
		@endif

		  <div class="card-body">
		    <h5 class="card-title">Nom du fichier : {{ $media->med_filename }}</h5>
		    <p class="card-text">Type de fichier : {{ $media->med_type }}</p>
		  <a href="{{ route('medias_delete', ['id' => $media->med_oid, 'path => $media->med_path ']) }}" 
				id="deleteMedia" class="btn btn-primary">Supprimer</a>
		
		  </div>
		</div>
	

	  @endforeach
    

	</div>

</section>


@endsection