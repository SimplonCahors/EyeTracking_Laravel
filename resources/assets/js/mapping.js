	var xa=0;
	var ya=0;
var section
document.body.addEventListener('mousedown', function(event){
	xa = event.layerX ;
	ya = event.layerY ;

});

document.body.addEventListener('mouseup', function(event){
	var xb = event.layerX;
	var yb = event.layerY;
	triangle(xa, ya, xb, yb);
});

function triangle (xA,yA,xB,yB) {
	console.log(xA, yA, xB, yB);
	var canvas = document.createElement("canvas");
	canvas.setAttribute("id", "myCanvas");
	canvas.setAttribute("width", (xB-xA));
	canvas.setAttribute("height", (yB-yA));
	canvas.style.position = "absolute";
	canvas.style.left = xA;
	canvas.style.top = -yA;
	canvas.style.backgroundColor = "black";	
	document.getElementById('content').appendChild(canvas);
	// var ctx = canvas.getContext("2d");
	// ctx.moveTo(xA, yA);
	// ctx.lineTo(xB, yB);
	// ctx.stroke();
};