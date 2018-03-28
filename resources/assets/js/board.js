// var button = document.getElementById("scrollUp");
var screen;

// Changer board dans le if() si les scrolls ne marchent plus

if(document.URL.includes('pages/read') || document.URL.includes('mapping')){
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

}
