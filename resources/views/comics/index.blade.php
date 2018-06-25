@extends('layout.app')

@section('title')
Catalogue
@endsection

@section('content')

<!-- CREATING A CONFIRMATION ALERT ADDING AND DELETING COMIC -->
@if ($message = Session::get('add'))
<div class="alert alert-success alert-dismissible" role="alert">
  {{ $message }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif

@if ($message = Session::get('update'))
<div class="alert alert-success alert-dismissible" role="alert">
  {{ $message }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif

@if ($message = Session::get('duplicate'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ $message }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif

@if ($message = Session::get('delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ $message }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif


<section class="containers_catalog">

    <!-- HERE THE IF FOR ADMIN + ADD BUTTON -->
    <a id="ajouter_catalog" href="{{route('comics_create')}}"><i class="material-icons catalogue">add_circle_outline</i></a>




    <!-- REQUEST TO DISPLAY ALREADY READED COMICS ORGANISED BY ASCENDING ORDER -->

    @foreach ($comics as $comic)
    <article class="comics_catalog">
        <img class="img_catalog" src="{{$comic->comic_miniature_url}}" alt="cover">
        <div class="infos_catalog">
            <ul>
                <li>{{$comic->comic_title}}</li>
                <li>{{$comic->comic_author}}</li>
                <li>{{$comic->comic_publisher}}</li>
            </ul>
            
        </div>
        <div class="read_edit_catalog">

                <!-- HERE THE IF FOR ADMIN + MODIFY BUTTON -->
                <a  href="{{ route ('comics_update', $comic->comic_id ) }} "  id="button_edit_catalog"><button class="btn-catalogue">Modifier</button></a>
            </div>
    </article>
    @endforeach
</section>  
<div class="nav_catalog">
    <a><button class="btn-pagination">< Previous</button></a>
    <a><button class="btn-pagination">Next ></button></a>
</div>
@endsection