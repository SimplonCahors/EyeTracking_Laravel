

<div id="navbar">
	<a href="{{ url('/') }}">Accueil</a>
	<a href="{{ url('/catalogue') }}">Catalogue</a>
	<a href="{{ url('/legalmentions') }}">Mentions Légales</a>

</div>

	@if (Auth::check())
	<a href="{{ url('/medias') }}">Médias</a>
	@endif
</div>
