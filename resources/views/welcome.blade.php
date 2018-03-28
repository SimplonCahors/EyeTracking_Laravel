@extends('layout.app')

@section('title')
    Accueil
@endsection

@section('content')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <h2 class="center_margin">Reprendre la lecture</h2>
    <section class="containers_catalog">

        <!-- REQUÊTE POUR AFFICHER LES BD DÉJÀ LUES CLASSÉES PAR ORDRE CROISSANT -->
        @foreach ($comics as $comic)
            <article class="comics_catalog">

                <img class="img_catalog" src="/bd.jpg" alt="cover">

                <div class="infos_catalog">
                    <ul>
                        <li>{{$comic->com_title}}</li>
                        <li>{{$comic->com_author}}</li>
                        <li>{{$comic->com_publisher}}</li>
                        <li>{{$comic->com_timestamp}}</li>
                    </ul>
                    <div class="read_edit_catalog">

                    <!-- ICI LE IF POUR L'ADMIN + BOUTON MODIFIER -->
                        <a  href="{{ route ('update-bd/', $comic->com_oid ) }} "  id="button_edit_catalog"><button class="buttons">Modifier</button></a>
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

                <img class="img_catalog" src="/bd.jpg" alt="cover">

                    <div class="infos_catalog">
                        <ul>
                            <li>{{$comic->com_title}}</li>
                            <li>{{$comic->com_author}}</li>
                            <li>{{$comic->com_publisher}}</li>
                            <li>{{$comic->com_timestamp}}</li>
                        </ul>
                        <div class="read_edit_catalog">

                        <!-- ICI LE IF POUR L'ADMIN + BOUTON MODIFIER -->
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