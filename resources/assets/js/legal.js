if(document.URL.includes('legalmentions')){
	var donnees = document.getElementById('donnees');
	var propriete = document.getElementById('propriete');
	var publication = document.getElementById('publication');

	var divDonnees = document.getElementById('societe');
	var divPropriete = document.getElementById('intellectuelle');
	var divPublication = document.getElementById('hebergement');
	console.log('ok');
	donnees.addEventListener('click', function(){
		divDonnees.classList.remove('display-none');
		donnees.classList.add('selected-tab');

		divPropriete.classList.add('display-none');
		propriete.classList.remove('selected-tab');

		divPublication.classList.add('display-none');
		publication.classList.remove('selected-tab');
	});

	propriete.addEventListener('click', function(){
		divDonnees.classList.add('display-none');
		donnees.classList.remove('selected-tab');

		divPropriete.classList.remove('display-none');
		propriete.classList.add('selected-tab');

		divPublication.classList.add('display-none');
		publication.classList.remove('selected-tab');
	});

	publication.addEventListener('click', function(){
		divDonnees.classList.add('display-none');
		donnees.classList.remove('selected-tab');

		divPropriete.classList.add('display-none');
		propriete.classList.remove('selected-tab');

		divPublication.classList.remove('display-none');
		publication.classList.add('selected-tab');
	});
};

