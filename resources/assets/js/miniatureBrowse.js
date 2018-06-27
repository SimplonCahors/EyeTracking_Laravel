if(document.URL.includes('comics/update/')){
//miniature pour la couverture
var input = document.getElementById('miniature');
var path = document.getElementById('fileuploadurl');

input.addEventListener('change', function() {
	var filePath = document.getElementById("miniature").value;
	var newPath = filePath.replace(/C:\\fakepath\\/i, '');
	path.innerHTML = newPath;
});

//miniature des boards
var inputBoard = document.getElementById('board-image');
var pathBoard = document.getElementById('boarduploadurl');

inputBoard.addEventListener('change', function() {
	var boardPath = document.getElementById("board-image").value;
	var newBoardPath = boardPath.replace(/C:\\fakepath\\/i, '');
	pathBoard.innerHTML = newBoardPath;
});
};