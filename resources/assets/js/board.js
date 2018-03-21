// var button = document.getElementById("scrollUp");
var screen;
document.getElementById("scrollUpBoard").addEventListener("mouseover", function(){
	screen = $(window).height();
	window.scrollBy(0, -screen);
});
document.getElementById("scrollDownBoard").addEventListener("mouseover", function(){
	screen = $(window).height();
	window.scrollBy(0, screen);

});		



    
