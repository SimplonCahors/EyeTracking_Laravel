if((document.URL.includes('pages/mapping'))){
var section = document.getElementById('page');
var xa=0;
var ya=0;

section.addEventListener('mousedown', function(event){
	event.preventDefault();
	//prise des coordonnées du clic selon la division contenant la page de BD
	xa = event.pageX;
	ya = event.pageY;

	section.addEventListener('mousemove',draw_update);
});

function draw_update (e){
	var xb = e.pageX;
	var yb = e.pageY;
	creation(xa, ya, xb, yb);
}


section.addEventListener('mouseup', function(event){
	section.removeEventListener('mousemove',draw_update);
	
});

// Création de la zone
function creation (xA,yA,xB,yB) {
	var old = document.getElementById('myCanvas');

	// console.log(xA, yA, xB, yB);
	var canvas = document.createElement("canvas");
	canvas.setAttribute("id", "myCanvas");
	// canvas.setAttribute("class", "myCanvasClass");
	canvas.setAttribute("width", Math.abs(xB-xA));
	canvas.setAttribute("height", Math.abs(yB-yA));
	canvas.style.position = "absolute";

	// Vérification de la position du point de départ de la zone avec la position du point se situant sous la souris
		if(xA < xB && yA > yB){
			canvas.style.left = (((xA-section.offsetLeft)*100)/section.offsetWidth)+"%";
			canvas.style.top = (((yB-section.offsetTop)*100)/section.offsetHeight)+"%";
		}
		else if(xA > xB && yA > yB){
			canvas.style.left = (((xB-section.offsetLeft)*100)/section.offsetWidth)+"%";
			canvas.style.top = (((yB-section.offsetTop)*100)/section.offsetHeight)+"%";

		}
		else if(xA > xB && yA < yB){
			canvas.style.left = (((xB-section.offsetLeft)*100)/section.offsetWidth)+"%";
			canvas.style.top = (((yA-section.offsetTop)*100)/section.offsetHeight)+"%";
		}
		else{
			canvas.style.left = (((xA-section.offsetLeft)*100)/section.offsetWidth)+"%";
			canvas.style.top = (((yA-section.offsetTop)*100)/section.offsetHeight)+"%";	
		}

	canvas.style.backgroundColor = "rgba(255,0,0,0.4)";
	canvas.style.border = "2px solid rgba(255,0,0,1)";	
	
	// Retrait de l'ancienne zone pour affichage dynamique	
		if(old){
			section.removeChild(old);
		}
	section.appendChild(canvas);
};
}