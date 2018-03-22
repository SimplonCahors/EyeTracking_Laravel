
@extends('layout.app')

@section('title')
Board
@endsection


   
@section('content')

<div id="app">
<section id="sectionBoard">
		<a href=""><img src="img/back.svg" alt="précédent" id="backBoard"></a> 
		<img src="img/plancheBD.JPG" alt="planche de BD" class="boardsBD">
		<a href=""><img src="img/next.svg" alt="suivant" id="nextBoard"></a> 
</section>
<div class="buttonScrollBoard">
		<img src="img/up.svg" alt="scroll up" id="scrollUpBoard">
		<img src="img/down.svg" alt="scroll down" id="scrollDownBoard">
</div>
<button type="button" class="btn btn-outline-secondary" id="buttonReturnBoard">Retour</button>
	
</div>
@endsection

