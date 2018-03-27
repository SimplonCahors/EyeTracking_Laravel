<div id="navbar">
	<a href="{{ url('/') }}">Accueil</a>
	<a href="{{ url('/catalogue') }}">Catalogue</a>
	<a href="{{ url('/legalmentions') }}">Mentions Légales</a>
	 @if (Auth::check())
	<a href="{{ url('/listMedias') }}">Liste Média</a>
@endif
</div>