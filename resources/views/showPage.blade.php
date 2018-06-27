<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affichage page</title>
</head>
    <body>
        <!-- $ page retrieved from PageController -->
        <!-- if problem, try a php artisan storage: link in the terminal -->
        @foreach($pages as $page)
        <img src="{{ $page->pag_image }}">
        @endforeach
    </body>
</html>
