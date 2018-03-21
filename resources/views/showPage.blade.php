<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <p>page lisible n° : {{ $page }}</p>

        {{--  devrait marcher  --}}
        <img src="storage/{{ $page }}"/>

        <img src="storage/images/page1_comic2.jpg" alt="image en dur"/>
        
        {{--  @php
        foreach ($pages as $page) {
            @endphp
                <img src="storage/{{ $page->pag_image }}">
            @php
        }
        @endphp  --}}
    </body>
</html>


