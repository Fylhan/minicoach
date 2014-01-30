var counter;
var timeLeft;
var isWork;
var count;

function getStyle(elem, cssprop, cssprop2){

	// IE
	if (elem.currentStyle) {
		return elem.currentStyle[cssprop];
	}
	// other browsers
	else if (document.defaultView && document.defaultView.getComputedStyle) {
	return document.defaultView.getComputedStyle(elem, null).getPropertyValue(cssprop2);
	}
	// fallback
	else {
		return null;
	}
}

function start() {
	clearInterval(counter);
	timeLeft = 0;
	isWork = true;
	count = 0;
	counter = setInterval(timer, 1000);
}

function stop() {
	clearInterval(counter);
}

function timer() {
	if(timeLeft == 0) {
		if(isWork) {
			isWork = false;
			timeLeft = document.getElementById('restTime').value;
			timeLeft++;
		} else {
			isWork = true;
			timeLeft = document.getElementById('workTime').value;
			timeLeft++;
			count++;
		}
	}
	
	timeLeft -= 1;
	document.getElementById('countdown').innerHTML = timeLeft;
	document.getElementById('action').innerHTML = (isWork ? 'Go étape '+count : 'Repos');
}

function showConfiguration() {
	var elem = document.getElementById('configurationBox');
	if ('none' == getStyle(elem, 'display', 'display')) {
		elem.style.display='block';
		document.getElementById('configurationArrow').innerHTML='△';
	}
	else {
		elem.style.display='none';
		document.getElementById('configurationArrow').innerHTML='▽';
	}
	return true;
}

window.onload=function() {
	document.getElementById('configurationBox').style.display='none';
	document.getElementById('configurationArrow').innerHTML='▽';
}