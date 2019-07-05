var btns = "";
var letters = "ABCDEFGHIJLMNOPQRSTUV";
var letterArray = letters.split("");
for (var i = 0; i < 21; i++){
var letter = letterArray.shift();
btns += '<button style="width:30px" class="btn btn-info btn-sm" onclick="alphabetSearch(\''+letter+'\');">'+letter+'</button>';
}
function alphabetSearch(let){
window.location = "searchAlphabeticView.php?letter="+let; 
}

document.write(btns);

var btns2 = "";
var letters2 = "XZ";
var letterArray2 = letters2.split("");
for (var i = 0; i < 2; i++){
var letter2 = letterArray2.shift();
btns2 += '<button style="width:30px" class="btn btn-info btn-sm" disabled onclick="alphabetSearch(\''+letter2+'\');">'+letter2+'</button>';
}
function alphabetSearch(let){
window.location = "searchAlphabeticView.php?letter="+let; 
}

document.write(btns2);
