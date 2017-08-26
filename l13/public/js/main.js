var imgArr = [
	'public/images/anh1.jpg',
	'public/images/anh2.jpg',
	'public/images/anh3.jpg'
];

var currentSlide = 0;
var targetImg = 
		document.getElementById('main-image');
function zoomIn(){
	targetImg.width = 600;
}
function zoomOut(){
	targetImg.width = 400;
}

function previous(){
	currentSlide = currentSlide == 0 ? imgArr.length-1 : currentSlide-1;
	targetImg.src = imgArr[currentSlide];
}
function next(){
	currentSlide = 
		currentSlide >= imgArr.length-1 
							? 0 : currentSlide+1;
	targetImg.src = imgArr[currentSlide];
}

setInterval(function(){
	next();
}, 3000);












