@extends('layout.app')

@section('title')
Medias
@endsection

@section('content')
<h2><a href="/medias-upload"> Ajouter un media</a></h2>
<h2>Liste de tout les médias</h2>


@foreach ($medias as $media) 
	<li>
		<p>{{ $media->med_type }}</p>
		<p>{{ $media->med_filename }}</p>

		@if ($media->med_type == 'img')
			<img src="storage/{{ $media->med_path }}">
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

	 <a href="/medias/delete?id={{ $media->med_oid }}&path={{ $media->med_path }}">Supprimer</a>
	</li>
@endforeach

@endsection