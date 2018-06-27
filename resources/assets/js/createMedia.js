if(document.URL.includes('medias/create')){
	var input = document.getElementById('media');
	var path = document.getElementById('mediauploadurl');

	input.addEventListener('change', function() {
		var filePath = document.getElementById("media").value;
		var newPath = filePath.replace(/C:\\fakepath\\/i, '');
		path.innerHTML = newPath;
	});
}
