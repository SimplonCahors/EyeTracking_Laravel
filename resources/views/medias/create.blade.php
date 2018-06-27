@extends('layout.app')

@section('title')
Ajouter un média
@endsection

@section('content')

<div class="container modify">

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

<form method="POST" enctype="multipart/form-data" action="{{ action('MediasController@store') }}" >
    @csrf
    <section class="page-titles">
        <h2>Ajouter un média</h2>
        <p>/</p>
    </section>

    <label for="mediaType">Type de fichier :</label>
    <select id="mediaType" name="dataType">
        <option value="img" selected disabled>Sélectionner un type de fichier</option> 
        <option value="img">Image</option> 
        <option value="son" >Son</option>
        <option value="video">Video</option>
    </select>

    <p class="label-miniature">Fichier :</p>
    <div class="contain-miniature">
        <label class="label-browse" id="label-media" for="media">Parcourir . . .</label>
        <input class="inputfile" type="file" id="media" name="media" />
        <span id="mediauploadurl"></span>
    </div>
    <input class="btn-outline" type="submit" value="AJOUTER" id="ajouter"/>

</form>  
</div>

@endsection
