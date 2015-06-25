var changeBanner, headerAnimation, load, moveInTaphouseFading, moveOutTaphouseFading, showHeader, toggleMenu;

changeBanner = void 0;

load = void 0;

toggleMenu = function() {
  var menu;
  menu = document.getElementById('menu');
  menu.style.display = menu.style.display !== 'block' ? 'block' : 'none';
};

moveInTaphouseFading = function(taphouseFading, i) {
  if (i <= 100) {
    taphouseFading.style.width = i + '%';
    setTimeout((function() {
      moveInTaphouseFading(taphouseFading, i + 1);
    }), 5);
  }
};

moveOutTaphouseFading = function(taphouseFading, i) {
  if (i >= 0) {
    taphouseFading.style.width = i + '%';
    setTimeout((function() {
      moveOutTaphouseFading(taphouseFading, i - 1);
    }), 5);
  }
};

showHeader = function(header, i) {
  if (i < 0) {
    header.style.top = i + 'px';
    setTimeout((function() {
      showHeader(header, i + 1);
    }), 5);
  }
};

changeBanner = function() {
  var bannerImage, i, next;
  bannerImage = void 0;
  i = void 0;
  next = void 0;
  bannerImage = document.getElementsByClassName('bannerImg');
  i = bannerImage.length;
  next = (new Date).getSeconds() % i;
  while (i--) {
    if (i === next) {
      bannerImage[i].style.display = 'inline';
    } else {
      bannerImage[i].style.display = 'none';
    }
  }
};

load = function(h) {
  var arrowBtn, bannerImage, bannerImgHeight, headerScroll, i, j, value;
  arrowBtn = void 0;
  bannerImage = void 0;
  bannerImgHeight = void 0;
  i = void 0;
  j = void 0;
  value = void 0;
  headerScroll = document.getElementsByClassName('headerScroll');
  bannerImage = document.getElementsByClassName('bannerImg');
  j = bannerImage.length;
  while (j--) {
    if (bannerImage[j].style.display === 'inline') {
      bannerImgHeight = bannerImage[j].height;
    }
  }
  arrowBtn = document.getElementsByClassName('arrowBtn');
  i = arrowBtn.length;
  value = (headerScroll.length === 0 ? 200 : 40) + (h === 0 ? bannerImgHeight / 2 : h);
  while (i--) {
    arrowBtn[i].style.top = value + 'px';
    arrowBtn[i].style.display = 'inline';
    arrowBtn[i].addEventListener('click', changeBanner);
  }
};

window.onresize = function(event) {
  var width;
  if (document.getElementById('taphouseFading').style.display !== 'none') {
    return;
  }
  width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  if (width > 750) {
    document.getElementById('menu').style.display = 'block';
    document.getElementById('burger').style.display = 'none';
  } else {
    document.getElementById('menu').style.display = 'none';
    document.getElementById('burger').style.display = 'block';
    document.getElementsByClassName('header')[0].className = 'container headerScroll';
    document.getElementById('placeholder').className = 'container headerScroll';
    document.getElementsByClassName('headerScroll')[0].style.height = '50px';
  }
  load(0);
};

headerAnimation = function(width, time) {
  setTimeout((function() {
    document.getElementById('taphouse').style.display = 'none';
    if (width > 750) {
      document.getElementById('menu').style.display = 'block';
    } else {
      document.getElementsByClassName('header')[0].className = 'container headerScroll';
      document.getElementById('placeholder').className = 'container headerScroll';
      document.getElementById('burger').style.display = 'block';
    }
    setTimeout((function() {
      moveOutTaphouseFading(document.getElementById('taphouseFading'), 100);
    }), 1);
    setTimeout((function() {
      document.getElementById('taphouseFading').style.display = 'none';
    }), 1200);
  }), time);
};

window.onload = function(event) {
  var width;
  width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  setTimeout((function() {
    moveInTaphouseFading(document.getElementById('taphouseFading'), 0);
  }), 1000);
  if (width > 750) {
    headerAnimation(width, 2000);
  } else {
    headerAnimation(width, 2700);
  }
  changeBanner();
  setTimeout((function() {
    load(0);
  }), 1000);
};

window.onscroll = function() {
  var doc, top, width;
  doc = document.documentElement;
  top = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0);
  width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  if (width > 750) {
    if (top > 0) {
      if (typeof document.getElementsByClassName('header')[0] === 'undefined') {
        return;
      }
      document.getElementsByClassName('header')[0].className = 'container headerScroll';
      document.getElementsByClassName('headerScroll')[0].style.top = '-50px';
      showHeader(document.getElementsByClassName('headerScroll')[0], -50);
    } else {
      if (typeof document.getElementsByClassName('headerScroll')[0] === 'undefined') {
        return;
      }
      document.getElementsByClassName('headerScroll')[0].className = 'container header';
      document.getElementById('placeholder').className = 'container header';
    }
  }
  load(0);
};
