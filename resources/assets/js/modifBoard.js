// Déclaration des variables
if (document.URL.includes('modifBoard')) {
  var btnCreateZone = document.getElementById("buttonCreateZone");
  var btnModifZone = document.getElementById("buttonModifZone");
  var formZone = document.getElementById("formZone");

  var section = document.getElementById('page');
console.log(section);
  // Lors du clic sur le bouton "Créer une zone"
  var createZone = btnCreateZone.addEventListener("click", function opacity() {
    if (this.click) {

      // css changes
      section.style.cursor = "crosshair";
      formZone.style.display = "block";
      btnCreateZone.className += " select";
      btnModifZone.classList.remove("select");

      //
      var xa = 0;
      var ya = 0;
      section.addEventListener('mousedown', initialisation);
      section.addEventListener('mouseup', remove);


      function initialisation(event) {
        event.preventDefault();
        //prise des coordonnées du clic selon la division contenant la page de BD
        xa = event.pageX;
        ya = event.pageY;

        section.addEventListener('mousemove', draw_update);
      };

      // Fonction qui appelle la création de la zone
      function draw_update(e) {
        var xb = e.pageX;
        var yb = e.pageY;
        creation(xa, ya, xb, yb);
      }


      // Remove des EventListener pour 
      function remove(event) {
        section.removeEventListener('mousemove', draw_update);
        section.removeEventListener('mousedown', initialisation);
        var confirmer = confirm("Etes vous sur de vouloir utiliser cette zone ?");
        if (confirmer) {
          idLocal++;
          section.removeEventListener('mouseup', remove);
          var posLeft = document.getElementById("myCanvas").style.left;
          var posTop = document.getElementById("myCanvas").style.top;
          var width = document.getElementById("myCanvas").width;
          var height = document.getElementById("myCanvas").height;

          document.getElementById("myCanvas").id = "myCanvas" + idLocal;
          section.style.cursor = "initial";
        } else {
          section.removeEventListener('mouseup', remove);
          section.removeChild(document.getElementById("myCanvas"));
          section.style.cursor = "initial";
        }
      }


      // Fonction de création de la zone
      function creation(xA, yA, xB, yB) {
        var old = document.getElementById('myCanvas');

        console.log(xA, yA, xB, yB);
        var canvas = document.createElement("canvas");
        canvas.setAttribute("id", "myCanvas");
        // canvas.setAttribute("class", "myCanvasClass");
        canvas.setAttribute("width", Math.abs(xB - xA));
        canvas.setAttribute("height", Math.abs(yB - yA));
        canvas.style.position = "absolute";
        console.log(section.offsetLeft, section.offsetTop, section.offsetHeight);

        // Vérification de la position du point de départ de la zone avec la position du point se situant sous la souris
        if (xA < xB && yA > yB) {
          canvas.style.left = (((xA - section.offsetLeft) * 100) / section.offsetWidth) + "%";
          canvas.style.top = (((yB - section.offsetTop) * 100) / section.offsetHeight) + "%";
        }
        else if (xA > xB && yA > yB) {
          canvas.style.left = (((xB - section.offsetLeft) * 100) / section.offsetWidth) + "%";
          canvas.style.top = (((yB - section.offsetTop) * 100) / section.offsetHeight) + "%";
        }

        else if (xA > xB && yA < yB) {
          canvas.style.left = (((xB - section.offsetLeft) * 100) / section.offsetWidth) + "%";
          canvas.style.top = (((yA - section.offsetTop) * 100) / section.offsetHeight) + "%";
        }
        else {
          canvas.style.left = (((xA - section.offsetLeft) * 100) / section.offsetWidth) + "%";
          canvas.style.top = (((yA - section.offsetTop) * 100) / section.offsetHeight) + "%";
        }

        canvas.style.backgroundColor = "rgba(255,0,0,0.4)";
        canvas.style.border = "2px solid rgba(255,0,0,1)";

        // Retrait de l'ancienne zone pour affichage dynamique	
        if (old) {
          section.removeChild(old);
        }
        section.appendChild(canvas);
      };


    } else {
      formZone.style.display = "none";
    }
  });

  // Lors du clic sur le bouton "Modifier une zone"
  var modifZone = btnModifZone.addEventListener("click", function opacity() {
    if (this.click) {
      section.style.cursor = "initial";
      formZone.style.display = "block";
      btnCreateZone.classList.remove("select");
      btnModifZone.className += " select";
    } else {
      formZone.style.display = "none";
    }
  });
}