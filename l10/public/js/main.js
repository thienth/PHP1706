var imgArr = [
	'public/images/anh1.jpg',
	'public/images/anh2.jpg',
	'public/images/anh3.jpg'
];

var currentSlide = 0;
var targetImg = 
		document.getElementById('main-image');
function previous(){
	
}
function next(){
	currentSlide = 
		currentSlide >= imgArr.length-1 
							? 0 : currentSlide+1;
	targetImg.src = imgArr[currentSlide];
}