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
		debugger;
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
	if(flag){
		return flag;
	}

	countTurn = 0;
	// Check theo hang doc (x = nhau)
	var listTd = 
			document.querySelectorAll('[x="'+element.attributes.x.value+'"]');
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
	if(flag){
		return flag;
	}

	// Check duong cheo tu phai sang trai diem dau tien se co toa do(x+y, 0)
	countTurn = 0;
	var customX = parseInt(element.attributes.x.value) 
						+ parseInt(element.attributes.y.value);
	var customY = 0;
	while(customX != -1){
		var td = document
			.querySelector('[x="' + customX + '"][y="' + customY + '"]');
		if(td != null){

			if(td.innerText == turn){
				countTurn++;
			}else{
				countTurn = 0;
			}

			if(countTurn >= 5){
				flag = true;
				break;
			}
		}
		customX--; customY++;
	}

	if(flag){
		return flag;
	}

	// Check duong cheo tu trai sang phai diem dau tien se co toa do(x-y, 0)
	countTurn = 0;
	var customX = parseInt(element.attributes.x.value) 
						- parseInt(element.attributes.y.value);
	var customY = 0;
	while(customY <= parseInt(selectTag.value)){
		var td = document
			.querySelector('[x="' + customX + '"][y="' + customY + '"]');
		if(td != null){

			if(td.innerText == turn){
				countTurn++;
			}else{
				countTurn = 0;
			}

			if(countTurn >= 5){
				flag = true;
				break;
			}
		}
		customX++; customY++;
	}
	if(flag){
		return flag;
	}

}




