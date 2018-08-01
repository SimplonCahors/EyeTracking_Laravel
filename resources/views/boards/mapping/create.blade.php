@extends('layout.app')

@section('title')
Créer une zone
@endsection

@section('content')
<div class="container modify">

    @php if(isset($result)) echo $result; @endphp

    <div class="card-body area">
        <form class="area-form" method="post" action=" {{action('AreaController@store',1)}}" enctype="multipart/form-data">
            @csrf
            <div>
                <div id="form-tps" >
                    <label for="tpsDeclenchement">Temps de déclenchement :</label>
                    <input type="number" name="trigger" class="form-control" id="tpsDeclenchement" value="1">
                    <p>Millisecondes</p>
                </div>
            </div>
            
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

            <!-- if the sending in the db is successful. the two possible $ results are modifiable in mediascontroller line 45 & 50 -->

            <select name="dataType" required>
                <option selected disabled>Sélectionner un média</option> 
                @foreach($medias as $media)
                <option value="{{ $media->media_id }}">{{ $media->media_filename }}</option>
                @endforeach
            </select>

            <input type="submit" class="btn-outline" value="Valider"/>

        </form>

        <div id="imgModif">
            <div class="page">
                <textarea name="coords1" class="canvas-area input-xxlarge" placeholder="Shape Coordinates" data-image-url="/img/plancheBD.JPG" style="display: none;">
                </textarea>
            </div>
        </div>
    </div>
</div>
@endsection



@section('extraJS')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.js"></script>
<script src={{ asset("js/canvasAreaDraw.js") }}></script>


@endsection 