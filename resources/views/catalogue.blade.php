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
    <?php    
    // foreach ($comics as $comic){
    //     echo {{$comic -> title}};
    // }
    ?>
        <article class="comics">
        <div class="infos">
            <img src="/bd.jpg" alt="cover">
            <ul>
                <li>Titre</li>
                <li>Auteur</li>
                <li>Edition</li>
            </ul>
            </div>
            <button>Lire</button>
        </article>
        <article class="comics">
        <div class="infos">
            <img src="/bd.jpg" alt="cover">
            <ul>
                <li>Titre</li>
                <li>Auteur</li>
                <li>Edition</li>
            </ul>
            </div>
            <button>Lire</button>
        </article>
        <article class="comics">
        <div class="infos">
            <img src="/bd.jpg" alt="cover">
            <ul>
                <li>Titre</li>
                <li>Auteur</li>
                <li>Edition</li>
            </ul>
            </div>
            <button>Lire</button>
        </article>
        </section>  
</body>
</html>