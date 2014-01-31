var counter;
var timeLeft;
var isWork = true;
var count;
var countY;
var params = {
		'width': 592,
		'height': 557,
		'xNumber': 4,
		'yNumber': 3,
		'number': 12,
};

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
	count = -1;
	countY = -1;
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
			count = (count+1)%params.number;
			if (0 == count) {
				countY = 0;
			}
			else if (0 == count%params.xNumber) {
				countY = (countY+1)%params.yNumber;
			}
		} else {
			isWork = true;
			timeLeft = document.getElementById('workTime').value;
			timeLeft++;
		}
	}
	
	timeLeft -= 1;
	document.getElementById('countdown').innerHTML = timeLeft;
	document.getElementById('action').innerHTML = (isWork ? 'Go étape '+(count+1) : 'Repos');
	document.getElementById('actions').style.width=(params.width/params.xNumber)+'px';
	document.getElementById('actions').style.height=(params.height/params.yNumber)+'px';
	document.getElementById('actions').style.backgroundPosition='-'+((count%params.xNumber)*(params.width/params.xNumber))+'px -'+(countY*(params.height/params.yNumber))+'px';
}

function showConfiguration() {
	var elem = document.getElementById('configuration');
	if ('none' == getStyle(elem, 'display', 'display')) {
		elem.style.display='block';
	}
	else {
		elem.style.display='none';
	}
	return false;
}

window.onload=function() {
	timeLeft = document.getElementById('restTime').value;
	document.getElementById('countdown').innerHTML = timeLeft;
	document.getElementById('action').innerHTML = (isWork ? 'Repos' : 'Prêt pour la première étape ?');
	document.getElementById('configuration').style.display='none';
	document.getElementById('actions').style.width=(params.width/params.xNumber)+'px';
	document.getElementById('actions').style.height=(params.height/params.yNumber)+'px';
	document.getElementById('actions').style.backgroundPosition='-'+((count%params.xNumber)*(params.width/params.xNumber))+'px -'+((count%params.yNumber)*(params.height/params.yNumber))+'px';
};
