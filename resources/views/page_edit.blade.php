@extends('layout.app')
@section('title')
   stuff
@endsection
@section('content')


<div id="appModif">
  <section id="sectionModifBoard">
    <div class="row">

      <div class="col-4">
     
        <button type="button" class="btn btn-outline-secondary" id="buttonModifZone">Créer une zone</button> 
  </div>
  <div class="col-8">
  <img id="background_map"src="http://farm8.staticflickr.com/7259/6956772778_2fa755a228.jpg" alt="Planets" usemap="#planetmap" class="map">

<map id="map_object"name="planetmap">


 @foreach ($areas as $zone) 
 <area id="{{ $zone->are_oid }}" shape="poly" coords="{{ $zone->are_coord }}" data-maphilight='{"alwaysOn": true,"strokeColor":"FE2E2E","strokeWidth":2,"fillColor":"FE2E2E","fillOpacity":0.6}' data-style= "without-media" href="" >
      <p></p>
@endforeach



<!-- en rouge : avec media
<area id="test_area" shape="poly" coords="208,221,208,202,198,199,201,191,218,176,229,155,221,132,196,117,169,131,157,158,163,172,177,164,173,180,190,185,192,199,187,201,185,222" data-maphilight='{"alwaysOn": true,"strokeColor":"FE2E2E","strokeWidth":2,"fillColor":"FE2E2E","fillOpacity":0.6}' data-style= "without-media" href="" >

 en bleu : sans media
<area shape="poly"   data-maphilight='{"alwaysOn": true,"strokeColor":"0000ff","strokeWidth":2,"fillColor":"0000ff","fillOpacity":0.6}' data-style= "with-media"coords="160,225,160,250,202,300" href="" >
<area shape="poly"   data-maphilight='{"alwaysOn": true,"strokeColor":"0000ff","strokeWidth":2,"fillColor":"0000ff","fillOpacity":0.6}' data-style= "with-media"coords="225,160,250,202,300,160" href="" > -->

</map>  
    </div>
      
    </div>
  </section>
</div>



@endsection







@section('extraJS')
<script src="http://davidlynch.org/projects/maphilight/jquery.maphilight.js"></script>

<script src="/js/page_edit.js"></script>
@endsection