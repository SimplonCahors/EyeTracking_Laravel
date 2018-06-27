@extends('layout.app')

@section('title')
    Accueil
@endsection

@section('content')
    <!-- CONFIRMATION ALERT UPON MEDIA DELETION -->
    @if ($message = Session::get('alert_delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p>
            Voulez-vous vraiment supprimer le media suivant :
            {{ $message }} ?
        </p>
        <!-- <a href="{{ route('medias_delete', ['name' => $message ]) }}" class="btn btn-danger">Supprimer</a> -->
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    @endif
    @php
        echo " Suppression effectuée ";
        header('refresh: 3; url = /medias/read');
    @endphp
@endsection