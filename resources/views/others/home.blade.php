@extends('layout.app')

@section('title')
    Accueil
@endsection

@section('content')

    <h2 class="center_margin">Reprendre la lecture</h2>
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
                        <li>{{$comic->created_at}}</li>
                    </ul>
                    <div class="read_edit_catalog">


                    <!-- HERE THE IF FOR ADMIN + MODIFY BUTTON -->
                        <a  href="{{ route ('comics_update', $comic->comic_id ) }} "  id="button_edit_catalog"><button class="buttons">Modifier</button></a>

                        <a><button class="buttons">Lire</button></a>
                    </div>
                </div>

            </article>
        @endforeach
    </section>

    <h2 class="center_margin">Dernières BD mises en ligne</h2>
    <section class="containers_catalog">
        @foreach ($comics as $comic)
            <article class="comics_catalog">

                <img class="img_catalog" src="{{ $comic->comic_miniature_url }}" alt="cover">

                    <div class="infos_catalog">
                        <ul>
                            <li>{{$comic->comic_title}}</li>
                            <li>{{$comic->comic_author}}</li>
                            <li>{{$comic->comic_publisher}}</li>
                            <li>{{$comic->created_at}}</li>
                        </ul>
                        <div class="read_edit_catalog">

                        <!-- HERE THE IF FOR ADMIN + MODIFY BUTTON -->
                            <a><button class="buttons" id="button_edit_catalog">Modifier</button></a>
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