var changeBanner, load;

function toggleMenu() {
	var menu = document.getElementById('menu');
	menu.style.display = (menu.style.display != 'block' ? 'block' : 'none');
}

function enterItem(item){
	document.getElementsByClassName("menuItem")[item].className = "menuItem selected";
}

function leaveItem(item){
	document.getElementsByClassName("menuItem")[item].className = "menuItem";
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
	value = (headerScroll.length == 0 ? 200 : 70)
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
	if (width > 850) {
		document.getElementById('menu').style.display = 'block';
		document.getElementById('burger').style.display = 'none';
	} else {
		document.getElementById('menu').style.display = 'none';
		document.getElementById('burger').style.display = 'block';
		document.getElementsByClassName("header")[0].className = "container headerScroll";
		document.getElementById("placeholder").className = "container headerScroll";
		document.getElementsByClassName("headerScroll")[0].style.height = "80px";
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
		if (width > 850) {
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

	}, 2000);

	var width = window.innerWidth || document.documentElement.clientWidth
	|| document.body.clientWidth;
	if (width <= 850) {
		document.getElementsByClassName("header")[0].className = "container headerScroll";
		document.getElementById("placeholder").className = "container headerScroll";
	}
	changeBanner();
	setTimeout((function() {
		load(0);
	}), 1000);
};

function showHeader(header, i) {
	if (i < 0) {
		header.style.top = i + "px";
		setTimeout(function() {
			showHeader(header, i + 1);
		}, 5);
	}
}

window.onscroll=function() {
	var doc = document.documentElement;
	var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
	var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth; 
	
	if(width > 850){
		if(top > 0){
			if (typeof document.getElementsByClassName("header")[0] == 'undefined'){
				return;
			}
			document.getElementsByClassName("header")[0].className = "container headerScroll";
			document.getElementsByClassName("headerScroll")[0].style.top = "-80px";
			showHeader(document.getElementsByClassName("headerScroll")[0], -80);
      // document.getElementById("placeholder").className = "container headerScroll";
	  	}else{
			if (typeof document.getElementsByClassName("headerScroll")[0] == 'undefined'){
				return;
			}
			document.getElementsByClassName("headerScroll")[0].className = "container header";
		  	document.getElementById("placeholder").className = "container header";
		}
	}
	load(0);
}
