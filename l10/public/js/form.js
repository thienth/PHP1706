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
for (var i = 5; i <=30 ; i++) {
	option += "<option value=" + i + ">"+i+"</option>";
}
selectTag.innerHTML = option;

var turn = "X";
var color = 'lightgreen';
function start(){
	var tbodyContent = "";
	var playgroundSize = selectTag.value;
	for (var i = 0; i < playgroundSize; i++) {
		tbodyContent += "<tr>";
		for (var j = 0; j < playgroundSize; j++) {
			tbodyContent += "<td onclick='check(this)' x=" + j + " y=" + i +"></td>";
		}
		tbodyContent += "</tr>";
	}
	tbodyTag.innerHTML = tbodyContent;
}

function check(element){
	if(element.innerText == ""){
		element.innerText = turn;
		element.style.color = color;
		var winner = checkWinner(element);
		if(winner) {
			alert("chuc mung ban da chien thang");
			start();
			return;
		}
		color = turn == "X" ? "red" : "lightgreen";
		turn = turn == "X" ? "O" : "X";

	}
}

function checkWinner(element){
	var flag = false;
	// check hang ngang (y = nhau)
	var listTd = 
			document.querySelectorAll('[y="'+element.attributes.y.value+'"]');
	var countTurn = 0;
	for (var i = 0; i < listTd.length; i++) {
		// listTd[i].style.background = "#ccc";
		if(listTd[i].innerText == turn){
			countTurn++;
		}else{
			countTurn = 0;
		}

		if(countTurn >= 5){
			flag = true;
			break;
		}
	}

	// neu thang thi return true, chua thang return false
	return flag;
}




