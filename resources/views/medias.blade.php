<h2><a href="/upload"> Ajouter un media</a></h2>
@php

foreach ($medias as $media) {

	@endphp
	<li>
		<p>{{ $media->med_type }}</p>
		<p>{{ $media->med_filename }}</p>
		<img src="storage/{{ $media->med_path }}">
		{{-- <form action="" method="post">
			<input type="text" name="id" value="{{ $media->med_oid }}">
			<input type="submit" value="effacer">
		</form> --}}
		<a href="/medias/delete?id={{ $media->med_oid }}">Supprimer</a>
	</li>
	@php

}

@endphp
