@extends('layout.app')

@section('title')
Accueil
@endsection

@section('content')

<section id="medias-upload">

    <!-- if file does not comply / do not pass validations -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- if the sending in the db is successful. the two possible $results are modifiable in mediascontroller at line 45 & 50 -->
    @php if(isset($result)) echo $result;
    @endphp


    @if ($message = Session::get('add'))
    <div class="alert alert-success alert-dismissible" role="alert">
      {{ $message }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($message = Session::get('duplicate'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ $message }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif

<div class="container">
  <div class="row">
    <div class="col-sm">   
       <div class="cadre">
        <form method="POST" enctype="multipart/form-data" action="{{ action('MediasController@store') }}" >
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
