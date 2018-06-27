@extends('layout.app')

@section('title')
Home
@endsection

@section('content')
<div id="appModif">
    <section id="sectionModifBoard">


        @php if(isset($result)) echo $result; @endphp
        <div class="card" id="formZone">
            <div class="card-body">
                <form method="post" action=" {{action('AreaController@store',1)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="tpsDeclenchement">Temps de déclenchement</label>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-4">
                                        <input type="number" name="trigger" class="form-control" id="tpsDeclenchement" value="1">
                                    </div>
                                    <div class="col-3">

                                        secondes
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
                                    @foreach($medias as $media)
                                    <option value="{{ $media->media_id }}">{{ $media->media_filename }}</option>
                                    @endforeach
                                </select>


                                
                                <input type="submit" class="btn btn-primary" value="Valider" />

                            </div>
                        </div>
                        <div class="col-8" id="imgModif">
                            <div id="page">

                               <textarea rows=3 name="coords1" class="canvas-area input-xxlarge" 
                               placeholder="Shape Coordinates" 
                               data-image-url="/img/plancheBD.JPG" style="display: none;"></textarea>
                           </div>
                       </div>
                   </div>

               </div>
           </form>
       </div>
   </div>

</section>
</div>
@endsection



@section('extraJS')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.js"></script>
<script src={{ asset("js/canvasAreaDraw.js") }}></script>


@endsection 