// var button = document.getElementById("scrollUp");
var screen;
document.getElementById("scrollUpBoard").addEventListener("mouseover", function(){
	screen = $(window).height();
	window.scrollBy(
		{
			top:-screen,
			left:0,
			behavior:'smooth' 
		});
});
document.getElementById("scrollDownBoard").addEventListener("mouseover", function(){
	screen = $(window).height();
	window.scrollBy(
		{
			top:screen,
			left:0,
			behavior:'smooth' 
		});

});		



    