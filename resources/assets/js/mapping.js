if((document.URL.includes('mapping'))){
var section = document.getElementById('page');
var xa=0;
var ya=0;

section.addEventListener('mousedown', function(event){
	event.preventDefault();
	xa = event.layerX ;
	ya = event.layerY ;
	section.addEventListener('mousemove',draw_update);

		// console.log(e.mousedown);
});

function draw_update (e){
	var xb = e.layerX;
	var yb = e.layerY;
	creation(xa, ya, xb, yb);
}


section.addEventListener('mouseup', function(event){
	section.removeEventListener('mousemove',draw_update);
	
});

function creation (xA,yA,xB,yB) {
	var old = document.getElementById('myCanvas');


	console.log(xA, yA, xB, yB);
	var canvas = document.createElement("canvas");
	canvas.setAttribute("id", "myCanvas");
	// canvas.setAttribute("class", "myCanvasClass");
	canvas.setAttribute("width", Math.abs(xB-xA));
	canvas.setAttribute("height", Math.abs(yB-yA));
	canvas.style.position = "absolute";

		if(xA < xB && yA > yB){
			canvas.style.left = xA+"px";
			canvas.style.top = yB+"px";
		}
		else if(xA > xB && yA > yB){
			canvas.style.left = xB+"px";
			canvas.style.top = yB+"px";

		}
		else if(xA > xB && yA < yB){
			canvas.style.left = xB+"px";
			canvas.style.top = yA+"px";
		}
		else{
			canvas.style.left = xA+"px";
			canvas.style.top = yA+"px";	
		}

	canvas.style.backgroundColor = "rgba(255,0,0,0.4)";
	canvas.style.border = "2px solid rgba(255,0,0,1)";		
		if(old){
			section.removeChild(old);
		}
	section.appendChild(canvas);
};
}