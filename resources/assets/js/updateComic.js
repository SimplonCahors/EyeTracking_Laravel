if(document.URL.includes('comics/update/')){

	var divInfos = document.getElementById('informations');
	var divAdd = document.getElementById('add-planche');
	var divListe = document.getElementById('liste-planches');

	var infos = document.getElementById('comic-infos');
	var add = document.getElementById('comic-add');
	var liste = document.getElementById('comic-liste');

	infos.addEventListener('click', function(){
		divInfos.classList.remove('display-none');
		infos.classList.add('selected-tab');

		divAdd.classList.add('display-none');
		add.classList.remove('selected-tab');

		divListe.classList.add('display-none');
		liste.classList.remove('selected-tab');
	});

	add.addEventListener('click', function(){
		divInfos.classList.add('display-none');
		infos.classList.remove('selected-tab');

		divAdd.classList.remove('display-none');
		add.classList.add('selected-tab');

		divListe.classList.add('display-none');
		liste.classList.remove('selected-tab');
	});

	liste.addEventListener('click', function(){
		divInfos.classList.add('display-none');
		infos.classList.remove('selected-tab');

		divAdd.classList.add('display-none');
		add.classList.remove('selected-tab');

		divListe.classList.remove('display-none');
		liste.classList.add('selected-tab');
	});
};