

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
