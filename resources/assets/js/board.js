// var button = document.getElementById("scrollUp");
document.getElementById("scrollUp").addEventListener("click", function(){
	scrollWin(0, -50)
});
document.getElementById("scrollDown").addEventListener("click", function(){
	scrollWin(0, 50)
});		

function scrollWin(x, y) {
	// console.log('hauteur totale du document : ',$(document).height());
	// console.log('position actuelle de la page : ',window.pageYOffset);
	// console.log('hauteur de la page internet : ',$(window).height());
    window.scrollBy(x, y);
}
	