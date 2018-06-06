@extends('layout.app')

@section('title')
    Accueil
@endsection

@section('content')

<section id="medias-upload">

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

 <div class="container">
  <div class="row">
    <div class="col-sm">   
             <div class="cadre">
         <form method="post" action="{{ route('medias_upload') }} " enctype="multipart/form-data" >
@csrf

  <select name="dataType">
        <option value="img">Image</option> 
            <option value="son" >Son</option>
                <option value="video">Video</option>
</select>

    <input type="file" name="file"/>

        <input type="submit"/>

            <a href="{{ route('medias') }}">Retour à la page Medias</a>

        </form>  

            </div> 
        </div>
    </div> 
</div>  

<!--
    <div>  On croit que :  video max 1MB, image max 10MB ? 
          <p> vidéo : mp4,mpeg,quicktime. </p> 
<p> image : jpeg not working </p>
<p>son :mpga,wav,ogg,mp4</p></div> -->


</section>

@endsection
