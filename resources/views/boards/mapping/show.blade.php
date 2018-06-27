@extends('layout.app')
@section('title')
   stuff
@endsection
@section('content')

<!-- C'est cassé :/ Manque jquery  -->
<div id="appModif">
  <section id="sectionModifBoard">
    <div class="row">

      <div class="col-4">
     
        <button type="button" class="btn btn-outline-secondary" id="buttonModifZone">Créer une zone</button> 
  </div>
  <div class="col-8">
  <img id="background_map"src="http://farm8.staticflickr.com/7259/6956772778_2fa755a228.jpg" alt="Planets" usemap="#planetmap" class="map">

<map id="map_object"name="planetmap">

<!-- avec/sans media -->
 @foreach ($areas as $zone) 
@if ( $zone-> has_media == 0 )
 <area id="{{ $zone->are_oid }}" shape="poly" coords="{{ $zone->are_coord }}" data-maphilight='{"alwaysOn": true,"strokeColor":"FE2E2E","strokeWidth":2,"fillColor":"FE2E2E","fillOpacity":0.6}' data-style= "without-media" href="" >
@endif
@if ( $zone-> has_media >= 1 )
<area id="{{ $zone->are_oid }}" shape="poly" coords="{{ $zone->are_coord }}" data-maphilight='{"alwaysOn": true,"strokeColor":"0000ff","strokeWidth":2,"fillColor":"0000ff","fillOpacity":0.6}' data-style= "without-media" href="" >
@endif
@endforeach

</map>  
    </div>
      
    </div>
  </section>
</div>



@endsection


@section('extraJS')
<script src="http://davidlynch.org/projects/maphilight/jquery.maphilight.js"></script>

<script  >


// //init the map for highlighting
$('.map').maphilight();


$(document).ready(function()
{
  $('area').each(function() {

    //   console.log($(this), 'ici');
    var data = $(this).data('maphilight');  

    $(this).data('maphilight', data).trigger('alwaysOn.maphilight');
      $(this).click(function(){
            //    console.log($(this))
            //    redirige vers ./area/{id}
            });
    });
    
});  

</script>
@endsection