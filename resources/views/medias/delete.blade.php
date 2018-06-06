@extends('layout.app')

@section('title')
    Accueil
@endsection

@section('content')
    @php
        echo " Suppression effectuée ";
        header('refresh: 3; url = /medias/read');
    @endphp
@endsection