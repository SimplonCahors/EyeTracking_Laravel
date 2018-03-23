import { stringify } from "querystring";

if (document.URL.includes('modifBoard')) {
  var btnCreateZone = document.getElementById("buttonCreateZone");
  var btnModifZone = document.getElementById("buttonModifZone");
  var formZone = document.getElementById("formZone");
  var bool = false;
  var section = document.getElementById('page');
  if (localStorage.getItem('idLocal')) {
    var idLocal = localStorage.getItem('idLocal');
    console.log(idLocal);
  } else {
    localStorage.setItem('idLocal', 0);
    var idLocal = localStorage.getItem('idLocal');
  }

  for(var i = 1; i < idLocal+1; i++){
    var zone = document.createElement("canvas");
            zone.setAttribute("id", "myCanvas"+i);
            // canvas.setAttribute("class", "myCanvasClass");
            zone.setAttribute("width", localStorage.getItem('width'+i));
            zone.setAttribute("height", localStorage.getItem('height'+i));
            zone.style.left = localStorage.getItem('left'+i);
            zone.style.top = localStorage.getItem('top'+i);
            zone.style.position = "absolute";

            zone.style.backgroundColor = "rgba(0,0,255,0.4)";
            zone.style.border = "2px solid rgba(0,0,255,1)";
            section.appendChild(zone);
  }

  var createZone = btnCreateZone.addEventListener("click", function opacity() {
    if (this.click) {
      section.style.cursor = "crosshair";
      formZone.style.display = "block";
      btnCreateZone.className += " select";
      btnModifZone.classList.remove("select");
      bool = true;
      console.log(bool);
      if (document.URL.includes('modifBoard') || (document.URL.includes('mapping'))) {
        if (bool) {
          var xa = 0;
          var ya = 0;
          function ajout(event) {
            event.preventDefault();
            xa = event.layerX;
            ya = event.layerY;
            if (bool) {
              section.addEventListener('mousemove', draw_update);
              bool = false;
            }
          }
          function draw_update(e) {
            var xb = e.layerX;
            var yb = e.layerY;
            creation(xa, ya, xb, yb);
          }
          function remove(event) {
            section.removeEventListener('mousemove', draw_update);
            section.removeEventListener('mousedown', ajout);
            var confirmer = confirm("Etes vous sur de vouloir utiliser cette zone ?");
            if (confirmer) {
              idLocal++;
              section.removeEventListener('mouseup', remove);
              var posLeft = document.getElementById("myCanvas").style.left;
              var posTop = document.getElementById("myCanvas").style.top;
              var width = document.getElementById("myCanvas").width;
              var height = document.getElementById("myCanvas").height;
              localStorage.setItem('left' + idLocal, posLeft);
              localStorage.setItem('top' + idLocal, posTop);
              localStorage.setItem('width' + idLocal, width + 'px');
              localStorage.setItem('height' + idLocal, height + 'px');
              localStorage.setItem('idLocal', idLocal);
              document.getElementById("myCanvas").id = "myCanvas" + idLocal;
              section.style.cursor = "initial";
            } else {
              section.removeEventListener('mouseup', remove);
              section.removeChild(document.getElementById("myCanvas"));
              section.style.cursor = "initial";
            }
          }

          section.addEventListener('mousedown', ajout);
          section.addEventListener('mouseup', remove);

          function creation(xA, yA, xB, yB) {
            var old = document.getElementById('myCanvas');


            console.log(xA, yA, xB, yB);
            var canvas = document.createElement("canvas");
            canvas.setAttribute("id", "myCanvas");
            // canvas.setAttribute("class", "myCanvasClass");
            canvas.setAttribute("width", Math.abs(xB - xA));
            canvas.setAttribute("height", Math.abs(yB - yA));
            canvas.style.position = "absolute";

            if (xA < xB && yA > yB) {
              canvas.style.left = xA + "px";
              canvas.style.top = yB + "px";
            }
            else if (xA > xB && yA > yB) {
              canvas.style.left = xB + "px";
              canvas.style.top = yB + "px";

            }
            else if (xA > xB && yA < yB) {
              canvas.style.left = xB + "px";
              canvas.style.top = yA + "px";
            }
            else {
              canvas.style.left = xA + "px";
              canvas.style.top = yA + "px";
            }

            canvas.style.backgroundColor = "rgba(255,0,0,0.4)";
            canvas.style.border = "2px solid rgba(255,0,0,1)";
            if (old) {
              section.removeChild(old);
            }
            section.appendChild(canvas);
          };
        }
      }
    } else {
      formZone.style.display = "none";
    }
  });

  var modifZone = btnModifZone.addEventListener("click", function opacity() {
    if (this.click) {
      section.style.cursor = "initial";
      bool = false;
      console.log(bool);
      formZone.style.display = "block";
      btnCreateZone.classList.remove("select");
      btnModifZone.className += " select";
    } else {
      formZone.style.display = "none";
    }
  });
}