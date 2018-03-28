@extends('layout.app')

@section('title')
    Home
@endsection

      <div class="col-4">
        <button type="button" class="btn btn-outline-secondary" id="buttonCreateZone">Ajouter média</button> 
      
  </div>
      <div id='boardContainer'>
        <textarea style="display:none;" rows=3 name="coords1" class="canvas-area input-xxlarge" disabled 
          placeholder="Shape Coordinates" 
          data-image-url="http://farm8.staticflickr.com/7259/6956772778_2fa755a228.jpg">208,221,208,202,198,199,201,191,218,176,229,155,221,132,196,117,169,131,157,158,163,172,177,164,173,180,190,185,192,199,187,201,185,222</textarea>
        </div>
      
    </div>
  </section>
</div>


@endsection


@section('extraJS')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.js"></script>
<script src="/js/canvasAreaDraw.js"></script>
<script src="/js/modifBoard.js"></script>
@endsection 



