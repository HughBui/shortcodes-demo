var changeBanner, load;

function toggleMenu() {
	var menu = document.getElementById('menu');
	menu.style.display = (menu.style.display != 'block' ? 'block' : 'none');
}

changeBanner = function() {
	var bannerImage, i, next;
	bannerImage = document.getElementsByClassName('bannerImg');
	i = bannerImage.length;
	next = new Date().getSeconds() % i;
	while (i--) {
		if (i === next) {
			bannerImage[i].style.display = 'inline';
		} else {
			bannerImage[i].style.display = 'none';
		}
	}
};

load = function(h) {
	var arrowBtn, bannerImage, bannerImgHeight, i, j, value;
	var headerScroll = document.getElementsByClassName("headerScroll");
	bannerImage = document.getElementsByClassName('bannerImg');
	j = bannerImage.length;
	while (j--) {
		if (bannerImage[j].style.display === 'inline') {
			bannerImgHeight = bannerImage[j].height;
		}
	}
	arrowBtn = document.getElementsByClassName('arrowBtn');
	i = arrowBtn.length;
	value = (headerScroll.length == 0 ? 200 : 40)
			+ (h === 0 ? bannerImgHeight / 2 : h);
	while (i--) {
		arrowBtn[i].style.top = value + 'px';
		arrowBtn[i].style.display = 'inline';
		arrowBtn[i].addEventListener('click', changeBanner);
	}
};

window.onresize = function(event) {
	if (document.getElementById('taphouseFading').style.display != 'none') {
		return;
	}
	var width = window.innerWidth || document.documentElement.clientWidth
			|| document.body.clientWidth;
	if (width > 750) {
		document.getElementById('menu').style.display = 'block';
		document.getElementById('burger').style.display = 'none';
	} else {
		document.getElementById('menu').style.display = 'none';
		document.getElementById('burger').style.display = 'block';
		document.getElementsByClassName("header")[0].className = "container headerScroll";
		document.getElementById("placeholder").className = "container headerScroll";
		document.getElementsByClassName("headerScroll")[0].style.height = "50px";
	}
	load(0);
};

function moveInTaphouseFading(taphouseFading, i) {
	if (i <= 100) {
		taphouseFading.style.width = i + "%";
		setTimeout(function() {
			moveInTaphouseFading(taphouseFading, i + 1);
		}, 5);
	}

}

function moveOutTaphouseFading(taphouseFading, i) {
	if (i >= 0) {
		taphouseFading.style.width = i + "%";
		setTimeout(function() {
			moveOutTaphouseFading(taphouseFading, i - 1);
		}, 5);
	}

}

window.onload = function(event) {
	var taphouseFading = document.getElementById('taphouseFading');
	setTimeout(function() {
		moveInTaphouseFading(taphouseFading, 0);
	}, 1000);
	setTimeout(function() {
		document.getElementById('taphouse').style.display = 'none';
		if (width > 750) {
			document.getElementById('menu').style.display = 'block';
		} else {
			document.getElementById('burger').style.display = 'block';
		}

		setTimeout(function() {
			moveOutTaphouseFading(taphouseFading, 100);
		}, 1);

		setTimeout(function() {
			document.getElementById('taphouseFading').style.display = 'none';
		}, 1200);

	}, 1500);

	var width = window.innerWidth || document.documentElement.clientWidth
			|| document.body.clientWidth;
	if (width <= 750) {
		document.getElementsByClassName("header")[0].className = "container headerScroll";
		document.getElementById("placeholder").className = "container headerScroll";
	}
	changeBanner();
	setTimeout((function() {
		load(0);
	}), 1000);
};

function fade(element) {
	var op = 1; // initial opacity
	var timer = setInterval(function() {
		if (op <= 0.1) {
			clearInterval(timer);
			element.style.display = 'none';
		}
		element.style.opacity = op;
		element.style.filter = 'alpha(opacity=' + op * 100 + ")";
		op -= op * 0.1;
	}, 1);
}

function unfade(element) {
	var op = 0.1; // initial opacity
	element.style.display = 'block';
	var timer = setInterval(function() {
		if (op >= 1) {
			clearInterval(timer);
		}
		element.style.opacity = op;
		element.style.filter = 'alpha(opacity=' + op * 100 + ")";
		op += op * 0.1;
	}, 1);
}

function shrinkHeader(header, i) {
	if (i >= 49) {
		header.style.height = i + "px";
		setTimeout(function() {
			shrinkHeader(header, i - 3);
		}, 5);
	}
}

function expandHeader(header, i) {
	if (i < 220) {
		header.style.height = i + "px";
		setTimeout(function() {
			expandHeader(header, i + 3);
		}, 5);
	}
}

function whenScroll() {
	var doc = document.documentElement;
	var top = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0);
	var width = window.innerWidth || document.documentElement.clientWidth
			|| document.body.clientWidth;
	if (width > 750) {
		if (top > 220) {
			shrinkHeader(document.getElementsByClassName("header")[0], 220);
			document.getElementsByClassName("header")[0].className = "container headerScroll";

			// window.onscroll = null;
			// setTimeout(function() {
			// window.onscroll = whenScroll;
			// }, 2000);

			// document.getElementById("placeholder").className = "container
			// headerScroll";
		} else {
			expandHeader(document.getElementsByClassName("headerScroll")[0], 50);
			setTimeout(
					function() {
						document.getElementsByClassName("headerScroll")[0].className = "container header";
					}, 300);

			// document.getElementById("placeholder").className = "container
			// header";
		}
	}else{
		
	}
	load(0);
}

window.onscroll = whenScroll;
