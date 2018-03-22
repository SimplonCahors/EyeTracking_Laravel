<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afficher une Page définine d'une BD</title>
</head>
    <body>
        <p>page lisible n° : {{ $page }}</p>
        <img src="/storage/{{ $page }}"/>
    </body>
</html>


