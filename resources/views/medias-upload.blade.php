
@extends('layout.app')

@section('title')
    Accueil
@endsection

@section('content')

    <!-- si le fichier n'est pas conforme/ne passe pas les validations -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- si l'envoi dans la db est réusssi. les deux $result possibles sont modifiables dans mediascontroller ligne 45 & 50 -->
    @php if(isset($result)) echo $result;
    @endphp

    <form method="post" action="/upload/save" enctype="multipart/form-data" >
        @csrf
        <select name="dataType">
            <option value="img">Image</option> 
            <option value="son" >Son</option>
            <option value="video">Video</option>
        </select>
        
        <input type="file" name="file"/>
        <input type="submit"/>
    </form>

    <a href="/medias/read">Retour à la page Medias</a>

    <!--
        <div>  On croit que : video max 1MB, image max 10MB ?
            <p> vidéo : mp4,mpeg,quicktime. </p>
            <p> image : jpeg not working </p>
            <p>son :mpga,wav,ogg,mp4</p>
        </div>
    -->
@endsection
