@extends('layout.app')
@section('title')
    Modifier BD
@endsection
@section('content')
<div class=" container modify">    
    <form>
        <h4>Mofidier les informations de la BD</h4>

        <label for="title">Titre de la BD</label>
        <input id="title" type="text" value="">
        <label for="author">Nom de l'auteur</label>
        <input id="author" type="text" value="">
        <label for="publisher"> Nom de l'éditeur</label>
        <input id="publisher" type="text" value=""> 
        <button>Appliquer les modifications</button>
    
    </form>
    <form>
        <h4>Modifier une page </h4>

        <label for="page">Selectionner une page</label>
        <select id="page">
        <option selected value="0">choisissez une page</option>
        <option value="1">Nom/numero de la page</option>
        <option value="2">Nom/numero de la page</option>
        <option value="3">Nom/numero de la page</option>
        <option value="4">Nom/numero de la page</option>        
        </select>
        <button>Aller à la modification de la page</button>
    </form>

</div>
@endsection