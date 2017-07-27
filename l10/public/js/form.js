/*function generate(){
	history.back();
	var countNumber = 
	document.getElementById('countValue').value;
	// var content = '';
	// for (var i = 0; i <= countNumber; i++) {
	// 	content += "<p> "+ i +"</p>";
	// }
	// document.getElementById('target').innerHTML = content;
	// 
	// window.location.href = "http://" + countNumber;
}*/
var selectTag = document.getElementById('select-cell');
var tbodyTag = document.getElementById('playground');
var option = '';
for (var i = 1; i <=30 ; i++) {
	option += "<option value=" + i + ">"+i+"</option>";
}
selectTag.innerHTML = option;
function start(){
	var tbodyContent = "";
	var playgroundSize = selectTag.value;
	for (var i = 0; i < playgroundSize; i++) {
		tbodyContent += "<tr>";
		for (var j = 0; j < playgroundSize; j++) {
			tbodyContent += "<td x=" + j + " y=" + i +"></td>";
		}
		tbodyContent += "</tr>";
	}
	tbodyTag.innerHTML = tbodyContent;
}