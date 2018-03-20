<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogue</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
        @include('layout.navbar')
    <section class="containers">
    @foreach ($comics as $comic)

        <article class="comics">
        <div class="infos">
            <img src="/bd.jpg" alt="cover">
            <ul>
                <li>{{$comic->com_title}}</li>
                <li>{{$comic->com_author}}</li>
                <li>{{$comic->com_publisher}}</li> 
                <li>{{$comic->com_timestamp}}</li>             
            </ul>

            </div>
            <button class="buttons">Lire</button>
        </article>
    @endforeach
</section>  
<div class="nav_catalog">
<a><button class="buttons_catalog">Previous</button></a>
<a><button class="buttons_catalog">Next</button></a>      
</div>
</body>
</html>