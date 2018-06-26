var input = document.getElementById('miniature');
var path = document.getElementById('fileuploadurl');

input.addEventListener('change', function() {
	var filePath = document.getElementById("miniature").value;
	var newPath = filePath.replace(/C:\\fakepath\\/i, '');
	path.innerHTML = newPath;
});
