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
                <form method="post" action= {{action('AreaController@Store',1)}} enctype="multipart/form-data">
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
                                        <input type="number" name="declanchement" class="form-control" id="tpsDeclenchement">
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
                                    <option value="img">Image</option>
                                    <option value="son">Son</option>
                                    <option value="video">Video</option>
                                </select>

                                <input type="file" name="file" required/>
                                <p>
                                    <input type="submit" class="btn btn-primary" value="Valider" </p>

                            </div>
                        </div>
                        <div class="col-8" id="imgModif">
                            <div id="page">
                                <textarea style="display:none;" rows=3 name="coords1" class="canvas-area input-xxlarge" disabled placeholder="Shape Coordinates"
                                    data-image-url="/img/plancheBD.JPG"></textarea>
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