@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="home_connect card">
                    <div class="card-header">Vous êtes connecté !</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p>Vous allez être redirigé vers l'accueil dans 5 secondes, si la redirection ne fonctionne pas, cliquez ici :</p>
                        <p>
                            <a href="{{ url('/') }}"><button class="btn-primary">Retour à l'accueil</button></a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
