<div id="navbar">
	<a href="{{ url('/') }}">Accueil</a>
	<a href="{{ route('comics_index') }}">Catalogue</a>
	<a href="{{ route('medias') }}">Médias</a>
	<a href="{{ url('/legalmentions') }}">Mentions Légales</a>
	@if (Auth::check())
	<a href="{{ url('/medias') }}">Médias</a>
	@endif
</div>

