function bai1(){
	var str = document.getElementById('b1').value;
	var arr = str.split(" ");
	console.log(arr.length-1);
}
function bai6(){
	var str = document.getElementById('b6').value;
	var arr = str.split(" ");
	var result = "";
	for (var i = 0; i < arr.length; i++) {
		var arrStr = arr[i];
		if(arrStr == undefined || arrStr == null || arrStr == ""){
			continue;
		}

		var lst = arrStr[0].toUpperCase();
		lst += arrStr.slice(1);
		arr[i] = lst;
	}
	result = arr.join(" ");
	console.log(result);
}