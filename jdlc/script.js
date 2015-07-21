var JDLC_SLIDE_COUNTERS, applyFilterToCollection, applyFirstFilter, applyFirstSeeMore, changeSlides, clearValidity, initialiseSlider, jdlcCloseLightbox, jdlcLaunchLightbox, jdlcUpdateFeaturedImage, showMore, sliderAction, toggleVisibleClass, validateContactForm, _see_additional;

validateContactForm = function(form) {
  var f, field, hasError, required, _i, _len;
  hasError = false;
  required = ['firstname', 'lastname', 'company', 'location', 'message'];
  for (_i = 0, _len = required.length; _i < _len; _i++) {
    field = required[_i];
    f = form[field];
    if (f.value === null || f.value === "") {
      hasError = true;
      f.classList.add("invalid");
    } else {
      f.classList.remove("invalid");
    }
  }
  return !hasError;
};

clearValidity = function(input) {
  return input.classList.remove("invalid");
};

toggleVisibleClass = function(elementID) {
  var el;
  el = document.getElementById(elementID);
  return el.classList.toggle("visible");
};

jdlcUpdateFeaturedImage = function(id, n) {
  var clicked, slider, _ref;
  if (n == null) {
    n = 0;
  }
  slider = document.getElementById(id);
  clicked = document.querySelector("#" + id + " .others").children[n];
  return (_ref = document.querySelector("#" + id + " .feature")) != null ? _ref.style.backgroundImage = clicked.style.backgroundImage : void 0;
};

jdlcLaunchLightbox = function(id) {
  var lbBackground, lbHeight, lbWidth, left, lightbox, top, vpHeight, vpScrollY, vpWidth;
  lightbox = document.getElementById(id);
  var balloonMap = document.getElementById("balloonMap");
  vpHeight = window.innerHeight;
  vpScrollY = window.scrollY;
  vpWidth = window.innerWidth;
  lbHeight = lightbox.offsetHeight;
  lbWidth = lightbox.offsetWidth;
  top = (vpHeight - lbHeight) / 2 + (balloonMap == null ? vpScrollY : 0);
  left = (vpWidth - lbWidth) / 2;
  lightbox.style.visibility = 'visible';
  lightbox.style.display = "inline-block";
  lightbox.style.top = top + 'px';
  lightbox.style.left = left + 'px';
  lbBackground = document.getElementById('lightbox_background');
  document.getElementsByClassName("yt")[0].style.display = "block";
  document.getElementsByClassName("yt-iframe")[0].style.display = "block";
  return lbBackground.style.display = 'inline-block';
};

jdlcCloseLightbox = function() {
  var lightbox, lightboxes, _i, _len;
  lightboxes = document.querySelectorAll('.lightbox');
  for (_i = 0, _len = lightboxes.length; _i < _len; _i++) {
    lightbox = lightboxes[_i];
    lightbox.style.visibility = 'hidden';
  }
  return document.getElementById('lightbox_background').style.display = 'none';
};

_see_additional = 3;

/*
#
# Given a container and a class filter
# This function hides all chilren of this container
# that does not contain the given class name
#
# containerID - DOM ID for the container element
# classFilter - the classname to filter on
# switchContainerID - DOM ID for the container element containing the switches
# caller - the switch node that called the event
# seeMoreID - ID of the see more button
#
*/


applyFilterToCollection = function(containerID, classFilter, switchContainerID, caller, seeMoreID) {
  var child, children, container, posts_seen, posts_shown, seeMore, switch_contianer, switches, swtch, _i, _j, _len, _len1;
  posts_shown = 0;
  posts_seen = 0;
  container = document.getElementById(containerID);
  children = container.childNodes;
  seeMore = document.getElementById(seeMoreID);
  for (_i = 0, _len = children.length; _i < _len; _i++) {
    child = children[_i];
    if (child.classList) {
      if (child.classList.contains(classFilter)) {
        if (posts_shown < _see_additional) {
          child.style.display = "inline-block";
          posts_shown++;
        } else {
          child.style.display = "none";
        }
        posts_seen++;
      } else {
        child.style.display = "none";
      }
    }
  }
  switch_contianer = document.getElementById(switchContainerID);
  switches = switch_contianer.childNodes;
  for (_j = 0, _len1 = switches.length; _j < _len1; _j++) {
    swtch = switches[_j];
    if (swtch.classList) {
      swtch.classList.remove("active");
    }
  }
  caller.classList.add("active");
  if (seeMore != null) {
    seeMore.setAttribute('filterClass', classFilter);
  }
  if (posts_seen > posts_shown) {
    return seeMore != null ? seeMore.style.display = "block" : void 0;
  } else {
    return seeMore != null ? seeMore.style.display = "none" : void 0;
  }
};

/*
#
# To be called on the switch container once html is loaded
# This performs a filter on the first element in the switch
#
# switchContainerID - the DOM ID for the switch container to perform the action on
#
*/


applyFirstFilter = function(switchContainerID) {
  var caller, _ref;
  caller = document.getElementById(switchContainerID);
  return (_ref = caller.firstChild) != null ? _ref.click() : void 0;
};

/*
#
# to be called when a non-switcher article listing requires loading
#
*/


applyFirstSeeMore = function(containerID, seeMoreID) {
  var child, children, container, seeMore, _i, _len;
  seeMore = document.getElementById(seeMoreID);
  container = document.getElementById(containerID);
  children = container.childNodes;
  for (_i = 0, _len = children.length; _i < _len; _i++) {
    child = children[_i];
    if (child.classList) {
      child.style.display = "none";
    }
  }
  return showMore(containerID, seeMore)();
};

/*
#
# To be called when the see more button has been pressed
#
# containerID - DOM ID for the container element
# switchContainerID - DOM ID for the container element containing the switches
# caller - the switch node that called the event
# amount - number of additional posts to show
#
*/


showMore = function(containerID, caller) {
  var child, children, classFilter, container, posts_seen, posts_shown, _i, _len;
  posts_shown = 0;
  posts_seen = 0;
  classFilter = caller.getAttribute('filterClass');
  container = document.getElementById(containerID);
  children = container.childNodes;
  for (_i = 0, _len = children.length; _i < _len; _i++) {
    child = children[_i];
    if (child.classList) {
      if ((!classFilter && child.classList.contains("filtered-article")) || child.classList.contains(classFilter)) {
        if (child.style.display === "none") {
          if (posts_shown < _see_additional) {
            child.style.display = "inline-block";
            posts_shown++;
          }
          posts_seen++;
        }
      }
    }
  }
  if (posts_seen > posts_shown) {
    return caller.style.display = "block";
  } else {
    return caller.style.display = "none";
  }
};

JDLC_SLIDE_COUNTERS = {};

changeSlides = function(index, id) {
  var i, slides, _i, _ref;
  slides = document.querySelectorAll('#' + id + ' .slide');
  for (i = _i = 0, _ref = slides.length - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
    slides[i].style.display = 'none';
  }
  return slides[index].style.display = 'block';
};

initialiseSlider = function(id) {
  JDLC_SLIDE_COUNTERS[id] = 0;
  return changeSlides(0, id);
};

sliderAction = function(dir, id) {
  var slides, visible;
  slides = document.querySelectorAll('#' + id + ' .slide');
  JDLC_SLIDE_COUNTERS[id] += dir;
  if (JDLC_SLIDE_COUNTERS[id] < 0) {
    JDLC_SLIDE_COUNTERS[id] = slides.length - 1;
  } else if (JDLC_SLIDE_COUNTERS[id] > slides.length - 1) {
    JDLC_SLIDE_COUNTERS[id] = 0;
  }
  visible = JDLC_SLIDE_COUNTERS[id];
  return changeSlides(visible, id);
};



/* HUGH ====================================================================*/



function fadeIn( elem, ms )
{
  if( ! elem )
    return;

  elem.style.opacity = 0;
  elem.style.filter = "alpha(opacity=0)";
  elem.style.display = "inline-block";
  elem.style.visibility = "visible";

  if( ms )
  {
    var opacity = 0;
    var timer = setInterval( function() {
      opacity += 50 / ms;
      if( opacity >= 1 )
      {
        clearInterval(timer);
        opacity = 1;
      }
      elem.style.opacity = opacity;
      elem.style.filter = "alpha(opacity=" + opacity * 100 + ")";
    }, 50 );
  }
  else
  {
    elem.style.opacity = 1;
    elem.style.filter = "alpha(opacity=1)";
  }
}

function fadeOut( elem, ms )
{
  if( ! elem )
    return;

  if( ms )
  {
    var opacity = 1;
    var timer = setInterval( function() {
      opacity -= 50 / ms;
      if( opacity <= 0 )
      {
        clearInterval(timer);
        opacity = 0;
        elem.style.display = "none";
        elem.style.visibility = "hidden";
      }
      elem.style.opacity = opacity;
      elem.style.filter = "alpha(opacity=" + opacity * 100 + ")";
    }, 50 );
  }
  else
  {
    elem.style.opacity = 0;
    elem.style.filter = "alpha(opacity=0)";
    elem.style.display = "none";
    elem.style.visibility = "hidden";
  }
}

function showTag(index){
  setTimeout(function(){ 
    var tags = document.getElementsByClassName("tag");
    var balloons = document.getElementsByClassName("balloon");
    balloons[index].style.marginTop = "2px";
    fadeIn(tags[index], 200); 
  }, 210);

}

function hideTag(index){
  var balloons = document.getElementsByClassName("balloon");
  balloons[index].style.marginTop = "5px";

  width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  if(width > 850){
	  setTimeout(function(){ 
		var tags = document.getElementsByClassName("tag");
		fadeOut(tags[index], 200); 
	  }, 300);
  }else{
	setTimeout(function(){ 
		var tags = document.getElementsByClassName("tag");
		fadeOut(tags[index], 200); 
	  }, 1000);
  }
}

function relocateMap(){
  var mapWidth = document.getElementById("map").offsetWidth;
  var mapHeight = document.getElementById("map").offsetHeight;
  var balloonMap = document.getElementById("balloonMap");
  var spans = document.getElementsByClassName("balloon-span");
  if(mapWidth > 812){
    balloonMap.style.width = "812px";
    balloonMap.style.height = "400px";
    balloonMap.style.marginLeft = (mapWidth - 812)/2 + "px";
  }else{
    balloonMap.style.width = mapWidth + "px";
    balloonMap.style.height = mapWidth * 572 / 1153 + "px";
    balloonMap.style.marginTop = (mapHeight - (mapWidth * 572 / 1153))/2 + "px";
  }
  
  if(mapWidth < 500){
	spans[0].style.left = "80%";
	spans[0].style.top = "85%";
	spans[1].style.left = "80%";
	spans[1].style.top = "99%";
  }
  
  showBalloon();
}

function showBalloon(index){
  var balloons = document.getElementsByClassName("balloon");
  index = typeof index !== 'undefined' ? index : balloons.length-1;
  if(index < 0){
    return;
  }
  balloons[index].style.display = "block";
  dropBalloon(balloons[index], -5);
  setTimeout(function(){ 
    showBalloon(index-1); 
  }, 500);
}

function dropBalloon(balloon, marginTop){
  if (marginTop == 6){
    balloon.style.marginTop = "none";
    return;
  }
  balloon.style.marginTop = marginTop + "px";
  setTimeout(function(){ 
    dropBalloon(balloon, marginTop + 1); 
  }, 10);
}

function toggleMenu(){
	var burger = document.getElementById('burger');
	if (burger.src.indexOf('hamburger_icon.png')!= -1) {
		burger.src  = templateUrl + '/static/close_menu_icon.png';
	} else {
	   burger.src = templateUrl +'/static/hamburger_icon.png';
	}

	var menu = document.getElementById("menu-part");
	if(menu.style.display == "none" || menu.style.display == ""){
		menu.style.display = "block";
	}else{
		menu.style.display = "none";
	}
}

function balloonGo(link){
	width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	if(width > 850){
		window.location.href = link;
	}
}

function toTitleCase(str)
{
    return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();}).replace("De", "de");
}

function openFooterLinksNewTab(){
    var links = document.getElementsByClassName("menu-item-type-custom");
    for (var i = 0; i < links.length; i++){
        links[i].firstChild.setAttribute("target", "_blank");
    }
}

window.onload = function(event) {
  var jdlBio = document.getElementById("jdlBio");
  if (jdlBio != null) {
    jdlBio.innerHTML = toTitleCase(jdlBio.innerHTML);
  }
  openFooterLinksNewTab();
  relocateMap();
}

window.onresize = function(event) {
  width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  if(width > 850){
  document.getElementById("menu-part").style.display = "block";
  }else{
  document.getElementById("menu-part").style.display = "none";
  }
  relocateMap();
}
