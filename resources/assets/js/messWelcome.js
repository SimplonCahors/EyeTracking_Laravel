
window.onload=function() { // Au chargement de la page
	var storage = localStorage.length;
	
	if (storage == 0) {
		console.log('Bienvenue');
		alert('Bienvenue sur notre site !')
	} else {
		console.log('Recoucou');
		alert('Content de vous revoir !')
	}
};

