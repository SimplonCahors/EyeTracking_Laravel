@extends('layout.app')

@section('title')
    Modifier Bd
@endsection

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

@section('content')

<div class=" container modify">

    <form method="POST">
        @csrf

        <div id="delete-group">
            <h4 id="delete-bd-title">Supprimer la BD</h4>
            <a id="delete-bd-icon" href="#"><i class="material-icons catalogue">delete_forever</i></a>
        </div>

        <h4>Modifier les informations de la BD</h4>

        <label for="titre">Titre de la BD</label>
        <input type="text" id="titre" name="titre" value="{{$comic->com_title}}"/>

        <label for="editeur"> Nom de l'éditeur</label>
        <input type="text" id="editeur" name="editeur" value="{{$comic->com_publisher}}"/>

        <label for="auteur">Nom de l'auteur</label>
        <input type="text" id="auteur" name="auteur" value="{{$comic->com_author}}"/>

        <label for="miniature">Miniature</label>
        <input type="file" id="miniature" name="miniature" required />
        <input type="submit" value="MODIFIER" id="modifier"/>
    </form>

    <div class="group-container">
        
        <div id="edit-group">
            <h4 id="edit-bd-title">Modifier la BD</h4>
            <a id="edit-bd-icon" href="#"><i class="material-icons catalogue">edit_mode</i></a>
        </div>

        <div class="container-fluid">

            <div class="card">
                <img class="card-img-top" src="http://via.placeholder.com/240x320" alt="Card image bd">
                <div class="card-body">
                    <h5 class="card-title">PAGE <span>4</span></h5>
                    <div class="card-icon">
                        <a id="edit-bd-icon" href="#"><i class="material-icons catalogue card-link">edit_mode</i></a>
                        <a id="delete-bd-icon" href="#"><i class="material-icons catalogue card-link">delete_forever</i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="http://via.placeholder.com/240x320" alt="Card image bd">
                <div class="card-body">
                    <h5 class="card-title">PAGE <span>4</span></h5>
                    <div class="card-icon">
                        <a id="edit-bd-icon" href="#"><i class="material-icons catalogue card-link">edit_mode</i></a>
                        <a id="delete-bd-icon" href="#"><i class="material-icons catalogue card-link">delete_forever</i></a>
                    </div>
                </div>
            </div><div class="card">
                <img class="card-img-top" src="http://via.placeholder.com/240x320" alt="Card image bd">
                <div class="card-body">
                    <h5 class="card-title">PAGE <span>4</span></h5>
                    <div class="card-icon">
                        <a id="edit-bd-icon" href="#"><i class="material-icons catalogue card-link">edit_mode</i></a>
                        <a id="delete-bd-icon" href="#"><i class="material-icons catalogue card-link">delete_forever</i></a>
                    </div>
                </div>
            </div><div class="card">
                <img class="card-img-top" src="http://via.placeholder.com/240x320" alt="Card image bd">
                <div class="card-body">
                    <h5 class="card-title">PAGE <span>4</span></h5>
                    <div class="card-icon">
                        <a id="edit-bd-icon" href="#"><i class="material-icons catalogue card-link">edit_mode</i></a>
                        <a id="delete-bd-icon" href="#"><i class="material-icons catalogue card-link">delete_forever</i></a>
                    </div>
                </div>
            </div><div class="card">
                <img class="card-img-top" src="http://via.placeholder.com/240x320" alt="Card image bd">
                <div class="card-body">
                    <h5 class="card-title">PAGE <span>4</span></h5>
                    <div class="card-icon">
                        <a id="edit-bd-icon" href="#"><i class="material-icons catalogue card-link">edit_mode</i></a>
                        <a id="delete-bd-icon" href="#"><i class="material-icons catalogue card-link">delete_forever</i></a>
                    </div>
                </div>
            </div><div class="card">
                <img class="card-img-top" src="http://via.placeholder.com/240x320" alt="Card image bd">
                <div class="card-body">
                    <h5 class="card-title">PAGE <span>4</span></h5>
                    <div class="card-icon">
                        <a id="edit-bd-icon" href="#"><i class="material-icons catalogue card-link">edit_mode</i></a>
                        <a id="delete-bd-icon" href="#"><i class="material-icons catalogue card-link">delete_forever</i></a>
                    </div>
                </div>
            </div><div class="card">
                <img class="card-img-top" src="http://via.placeholder.com/240x320" alt="Card image bd">
                <div class="card-body">
                    <h5 class="card-title">PAGE <span>4</span></h5>
                    <div class="card-icon">
                        <a id="edit-bd-icon" href="#"><i class="material-icons catalogue card-link">edit_mode</i></a>
                        <a id="delete-bd-icon" href="#"><i class="material-icons catalogue card-link">delete_forever</i></a>
                    </div>
                </div>
            </div><div class="card">
                <img class="card-img-top" src="http://via.placeholder.com/240x320" alt="Card image bd">
                <div class="card-body">
                    <h5 class="card-title">PAGE <span>4</span></h5>
                    <div class="card-icon">
                        <a id="edit-bd-icon" href="#"><i class="material-icons catalogue card-link">edit_mode</i></a>
                        <a id="delete-bd-icon" href="#"><i class="material-icons catalogue card-link">delete_forever</i></a>
                    </div>
                </div>
            </div><div class="card">
                <img class="card-img-top" src="http://via.placeholder.com/240x320" alt="Card image bd">
                <div class="card-body">
                    <h5 class="card-title">PAGE <span>4</span></h5>
                    <div class="card-icon">
                        <a id="edit-bd-icon" href="#"><i class="material-icons catalogue card-link">edit_mode</i></a>
                        <a id="delete-bd-icon" href="#"><i class="material-icons catalogue card-link">delete_forever</i></a>
                    </div>
                </div>
            </div><div class="card">
                <img class="card-img-top" src="http://via.placeholder.com/240x320" alt="Card image bd">
                <div class="card-body">
                    <h5 class="card-title">PAGE <span>4</span></h5>
                    <div class="card-icon">
                        <a id="edit-bd-icon" href="#"><i class="material-icons catalogue card-link">edit_mode</i></a>
                        <a id="delete-bd-icon" href="#"><i class="material-icons catalogue card-link">delete_forever</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    


@endsection