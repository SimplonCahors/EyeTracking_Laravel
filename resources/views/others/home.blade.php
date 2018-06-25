@extends('layout.app')

@section('title')
Accueil
@endsection

@section('content')

<section class="page-titles">
    <h2>Reprendre la lecture</h2>
    <p>/</p>
</section>
<section class="containers_catalog">

    <!-- REQUEST TO DISPLAY THE ALREADY READED COMICS ORGANISED BY ASCENDING ORDER -->
    @foreach ($comics as $comic)
    <article class="comics_catalog">

        <img class="img_catalog" src="{{ $comic->comic_miniature_url }}" alt="cover">

        <div class="infos_catalog">
            <ul>
                <li>{{$comic->comic_title}}</li>
                <li>{{$comic->comic_author}}</li>
                <li>{{$comic->comic_publisher}}</li>
            </ul>
            <div class="read_edit_catalog">


                <!-- HERE THE IF FOR ADMIN + MODIFY BUTTON -->
                <a  href="{{ route ('comics_update', $comic->comic_id ) }} "  id="button_edit_catalog"><button class="btn-catalogue">Modifier</button></a>
                <a><button class="btn-catalogue">Lire</button></a>
            </div>
        </div>

    </article>
    @endforeach
</section>

<section class="page-titles">
    <h2>Dernières BD mises en ligne</h2>
    <p>/</p>
</section>
<section class="containers_catalog">
    @foreach ($comics as $comic)
    <article class="comics_catalog">

        <img class="img_catalog" src="{{ $comic->comic_miniature_url }}" alt="cover">

        <div class="infos_catalog">
            <ul>
                <li>{{$comic->comic_title}}</li>
                <li>{{$comic->comic_author}}</li>
                <li>{{$comic->comic_publisher}}</li>
            </ul>
            <div class="read_edit_catalog">

                <!-- HERE THE IF FOR ADMIN + MODIFY BUTTON -->
                <a  href="{{ route ('comics_update', $comic->comic_id ) }} "  id="button_edit_catalog"><button class="btn-catalogue">Modifier</button></a>
                <a><button class="btn-catalogue">Lire</button></a>
            </div>
        </div>

    </article>
    @endforeach
</section>  
@endsection