@extends('layout.app')

@section('title')
    Add Page
@endsection
@section('content')

<!-- Display of a customized error message if non-compliant inputs -->
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

<!-- Displaying error messages returned by Laravel -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Form: page number + file upload -->
    <form method="POST" enctype="multipart/form-data" action="{{ action('BoardsController@store',1) }}">         
        @csrf
        <input required type="number" min="1" name="numeroPage" placeholder="numero de page">
        <input required type="file" name="filename"/>
        <input type="submit" value="entrer" name="submit">
    </form>

@endsection