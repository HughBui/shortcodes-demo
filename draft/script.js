var changeBanner, load;

function toggleMenu(){
  var menu = document.getElementById('menu');
  menu.style.display = (menu.style.display != 'block' ? 'block' : 'none' );
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
  value = (headerScroll.length == 0 ? 200 : 40) + (h === 0 ? bannerImgHeight / 2 : h);
  while (i--) {
    arrowBtn[i].style.top = value + 'px';
    arrowBtn[i].style.display = 'inline';
    arrowBtn[i].addEventListener('click', changeBanner);
  }
};

window.onresize = function(event) {
  if(document.getElementById('taphouseFading').style.display != 'none'){
    return;
  }
  var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  if(width > 750){
      document.getElementById('menu').style.display = 'block';
      document.getElementById('burger').style.display = 'none';
  }else{
      document.getElementById('menu').style.display = 'none';
      document.getElementById('burger').style.display = 'block';
      document.getElementsByClassName("header")[0].className = "container headerScroll";
      document.getElementById("placeholder").className = "container headerScroll";
  }
  load(0);
};

window.onload = function(event) {
  setTimeout((function() {
    document.getElementById('taphouse').style.display = 'none';
    document.getElementById('taphouseFading').style.display = 'none';
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if(width > 750){
      document.getElementById('menu').style.display = 'block';
    } else{
      document.getElementById('burger').style.display = 'block';
    }
  }), 4100);
  var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  if(width <= 750){
    document.getElementsByClassName("header")[0].className = "container headerScroll";
    document.getElementById("placeholder").className = "container headerScroll";
  }
  changeBanner();
  setTimeout((function() {
    load(0);
  }), 1000);
};

window.onscroll=function() {
  var doc = document.documentElement;
  var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
  var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth; 
  if(width > 750){
    if(top > 0){
      document.getElementsByClassName("header")[0].className = "container headerScroll";
      document.getElementById("placeholder").className = "container headerScroll";
    }else{
      document.getElementsByClassName("headerScroll")[0].className = "container header";
      document.getElementById("placeholder").className = "container header";
    }
  }
  load(0);
}
