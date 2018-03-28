@extends('layout.app')
@section('title')
   stuff
@endsection
@section('content')
<textarea style="display:none;" rows=3 name="coords1" class="canvas-area input-xxlarge"  

placeholder="Shape Coordinates" 

data-image-url="http://farm8.staticflickr.com/7259/6956772778_2fa755a228.jpg"></textarea>



<img id="background_map"src="http://farm8.staticflickr.com/7259/6956772778_2fa755a228.jpg" alt="Planets" usemap="#planetmap" class="map">

 <map id="map_object"name="planetmap">

<area id="test_area" shape="poly" coords="208,221,208,202,198,199,201,191,218,176,229,155,221,132,196,117,169,131,157,158,163,172,177,164,173,180,190,185,192,199,187,201,185,222" href="#" alt="Sun">
 <area id= "bonjour"shape="poly" coords="160,225,160,250,202,300" href="" alt="Sun">

</map>  
@endsection



@section('extraJS')
<script src="http://davidlynch.org/projects/maphilight/jquery.maphilight.js"></script>

<script>
// 

//init the map for highlighting 
        $('.map').maphilight();


     $(document).ready(function()
    {
        var data = {};
            
        data.alwaysOn = true;
        data.fillColor = 'FE2E2E'; 
        data.strokeColor = '0000FF';
        data.strokeWidth ='2'
        data.fillOpacity = '0.5';
        $('#test_area').data('maphilight', data).trigger('alwaysOn.maphilight');
        $('#bonjour').data('maphilight', data).trigger('alwaysOn.maphilight');
        
    });    
</script>


@endsection