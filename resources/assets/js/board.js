// var button = document.getElementById("scrollUp");
var screen;
document.getElementById("scrollUp").addEventListener("mouseover", function(){
	screen = $(window).height();
	window.scrollBy(0, -screen);
});
document.getElementById("scrollDown").addEventListener("mouseover", function(){
	screen = $(window).height();
	window.scrollBy(0, screen);

});		



    
