<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogue</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
@include('layout.navbar')

    <section class="containers_catalog">
            <!-- ICI LE IF POUR L'ADMIN + BOUTON AJOUTER -->        
            <a id="ajouter_catalog" href=""><i class="material-icons catalogue">add_circle_outline</i></a>
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
                <!-- <a><button class="buttons" id="button_edit_catalog">Modifier</button></a> -->
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
</body>
</html>