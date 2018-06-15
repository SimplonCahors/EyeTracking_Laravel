@extends('layout.app')

@section('title')
    Board
@endsection


@section('content')
    <div id="app">
        
        <section id="sectionBoard">
            <a href=""><img src="/img/back.svg" alt="précédent" id="backBoard"></a> 
            <div id="page">

             @foreach($pages as $page)
                 <img draggable="false" src="{{ $page->pag_image }}" alt="planche de BD"  id="img" class="boardsBD noselect">
             @endforeach
       
            </div>
            <a href=""><img src="/img/next.svg" alt="suivant" id="nextBoard"></a> 
        </section>
        <div class="buttonScrollBoard">
            <img src="/img/up.svg" alt="scroll up" id="scrollUpBoard">
            <img src="/img/down.svg" alt="scroll down" id="scrollDownBoard">
        </div>
        <button type="button" class="btn btn-outline-secondary" id="buttonReturnBoard">Retour</button>

        <!-- Pour la sélection des pages -->
        <form>
            <select id="pageChoice_board">
                <option value="" selected>Pages</option>
                <option value="3">3</option>
                <option value="18">18</option>
            </select>
        </form> 

    </div>
@endsection

