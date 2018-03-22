var btnCreateZone = document.getElementById("buttonCreateZone");
var btnModifZone = document.getElementById("buttonModifZone");
var formZone = document.getElementById("formZone");

var createZone = btnCreateZone.addEventListener("click", function opacity() {
  if (this.click) {
    formZone.style.display = "block";
    btnCreateZone.className += " select";
    btnModifZone.classList.remove("select");
  } else {
    formZone.style.display = "none";
  }
});

var modifZone = btnModifZone.addEventListener("click", function opacity() {
  if (this.click) {
    formZone.style.display = "block";
    btnCreateZone.classList.remove("select");
    btnModifZone.className += " select";
  } else {
    formZone.style.display = "none";
  }
});
