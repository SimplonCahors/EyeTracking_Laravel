@extends('layout.app')

@section('title')
    Catalogue
@endsection

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php
/**
 * ^ COMMENT:
 *
 * Qu'est-ce que ça fait là ça ?
 * Y'a que cette page qui à le droit à avoir des icones ? Tu vas le mettre sur toutes les pages avec icones ?
 */
?>

@section('content')
    <img src="/img/plancheBD.JPG" usemap="#planchemap">

    <map name="planchemap">
        <area style="filter: grayscale(1); cursor:pointer;" shape="rect" coords="400,0,600,50" id="map1">
        <area style="cursor:pointer;" shape="rect" coords="420,320,740,580" id="map2">
    </map> 

    <audio id="audio1">
        <source src="/audio/secours.ogg" type="audio/ogg">
    </audio>

    <audio id="audio2">
        <source src="/audio/plouf.ogg" type="audio/ogg">
    </audio>

    <script type="text/javascript">
        var map1 = document.getElementById('map1');
        var x1 = document.getElementById('audio1');
        var test1;
        map1.addEventListener("mouseover", function(event){
            console.log("yes");
            test1 = setTimeout(function(){x1.play()}, 2000);          
        });
        map1.addEventListener("mouseout", function(event){
            clearTimeout(test1);
            x1.load();
        });
        var map2 = document.getElementById('map2');
        var x2 = document.getElementById('audio2');
        var test2;
        map2.addEventListener("mouseover", function(event){
            console.log("oui");
            test2 = setTimeout(function(){x2.play()}, 2000);
        });
        map2.addEventListener("mouseout", function(event){
            clearTimeout(test2);
            x2.load();
        });
    </script>
@endsection