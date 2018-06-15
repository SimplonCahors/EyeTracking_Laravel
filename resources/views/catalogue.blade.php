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
    <a id="ajouter_catalog" href="{{route('ajouter-bd')}}"><i class="material-icons catalogue">add_circle_outline</i></a>



    <!-- REQUEST TO DISPLAY ALREADY READED COMICS ORGANISED BY ASCENDING ORDER -->

    @foreach ($comics as $comic)
    <article class="comics_catalog">
        <img class="img_catalog" src="/bd.jpg" alt="cover">
        <div class="infos_catalog">
            <ul>
                <li>{{$comic->comic_title}}</li>
                <li>{{$comic->comic_author}}</li>
                <li>{{$comic->comic_publisher}}</li>
                <li>{{$comic->comic_timestamp}}</li>
            </ul>
            <div class="read_edit_catalog">
                <!-- HERE THE IF FOR ADMIN + MODIFY BUTTON -->
                <a href="{{route('update-bd/',[$comic->comic_oid])}}"><button class="buttons" id="button_edit_catalog">Modifier</button></a>

                <a><button class="buttons">Lire</button></a>
            </div>
        </div>
    </article>
    @endforeach
</section>  
<div class="nav_catalog">
    <a><button class="buttons_catalog">Previous</button></a>
    <a><button class="buttons_catalog">Next</button></a>
</div>
@endsection