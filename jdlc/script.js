var JDLC_SLIDE_COUNTERS, applyFilterToCollection, applyFirstFilter, changeSlides, clearValidity, initialiseSlider, jdlcCloseLightbox, jdlcLaunchLightbox, jdlcUpdateFeaturedImage, sliderAction, toggleVisibleClass, validateContactForm;

validateContactForm = function(form) {
  var f, field, hasError, j, len, required;
  hasError = false;
  required = ['firstname', 'lastname', 'company', 'location', 'message'];
  for (j = 0, len = required.length; j < len; j++) {
    field = required[j];
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
  var clicked, slider;
  if (n == null) {
    n = 0;
  }
  slider = document.getElementById(id);
  clicked = document.querySelector("#" + id + " .others").children[n];
  return document.querySelector("#" + id + " .feature").style.backgroundImage = clicked.style.backgroundImage;
};

jdlcLaunchLightbox = function(id) {
  var lbBackground, lbHeight, lbWidth, left, lightbox, top, vpHeight, vpScrollY, vpWidth;
  lightbox = document.getElementById(id);
  vpHeight = window.innerHeight;
  vpScrollY = window.scrollY;
  vpWidth = window.innerWidth;
  lbHeight = lightbox.offsetHeight;
  lbWidth = lightbox.offsetWidth;
  top = (vpHeight - lbHeight) / 2 + vpScrollY;
  left = (vpWidth - lbWidth) / 2;
  lightbox.style.visibility = 'visible';
  lightbox.style.display = "inline-block";
  lightbox.style.top = top + 'px';
  lightbox.style.left = left + 'px';
  lbBackground = document.getElementById('lightbox_background');
  return lbBackground.style.display = 'inline-block';
};

jdlcCloseLightbox = function() {
  var j, len, lightbox, lightboxes;
  lightboxes = document.querySelectorAll('.lightbox');
  for (j = 0, len = lightboxes.length; j < len; j++) {
    lightbox = lightboxes[j];
    lightbox.style.visibility = 'hidden';
  }
  return document.getElementById('lightbox_background').style.display = 'none';
};


/*
 *
 * Given a container and a class filter
 * This function hides all chilren of this container
 * that does not contain the given class name
 *
 * containerID - DOM ID for the container element
 * classFilter - the classname to filter on
 * switchContainerID - DOM ID for the container element containing the switches
 * caller - the switch node that called the event
 *
 */

 applyFilterToCollection = function(containerID, classFilter, switchContainerID, caller) {
  var child, children, container, j, k, len, len1, switch_contianer, switches, swtch;
  container = document.getElementById(containerID);
  children = container.childNodes;
  for (j = 0, len = children.length; j < len; j++) {
    child = children[j];
    if (child.classList) {
      if (child.classList.contains(classFilter)) {
        child.style.display = "inline-block";
      } else {
        child.style.display = "none";
      }
    }
  }
  switch_contianer = document.getElementById(switchContainerID);
  switches = switch_contianer.childNodes;
  for (k = 0, len1 = switches.length; k < len1; k++) {
    swtch = switches[k];
    if (swtch.classList) {
      swtch.classList.remove("active");
    }
  }
  return caller.classList.add("active");
};


/*
 *
 * To be called on the switch container once html is loaded
 * This performs a filter on the first element in the switch
 *
 * switchContainerID - the DOM ID for the switch container to perform the action on
 *
 */

 applyFirstFilter = function(switchContainerID) {
  var caller, ref;
  caller = document.getElementById(switchContainerID);
  return (ref = caller.firstChild) != null ? ref.click() : void 0;
};

JDLC_SLIDE_COUNTERS = {};

changeSlides = function(index, id) {
  var i, j, ref, slides;
  slides = document.querySelectorAll('#' + id + ' .slide');
  for (i = j = 0, ref = slides.length - 1; 0 <= ref ? j <= ref : j >= ref; i = 0 <= ref ? ++j : --j) {
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
    fadeIn(tags[index], 200); 
  }, 210);

}

function hideTag(index){
  setTimeout(function(){ 
    var tags = document.getElementsByClassName("tag");
    fadeOut(tags[index], 200); 
  }, 300);
}

function relocateMap(){
  var mapWidth = document.getElementById("map").offsetWidth;
  var mapHeight = document.getElementById("map").offsetHeight;
  var balloonMap = document.getElementById("balloonMap");
  if(mapWidth > 812){
    balloonMap.style.width = "812px";
    balloonMap.style.height = "400px";
    balloonMap.style.marginLeft = (mapWidth - 812)/2 + "px";
  }else{
    balloonMap.style.width = mapWidth + "px";
    balloonMap.style.height = mapWidth * 572 / 1153 + "px";
    balloonMap.style.marginTop = (mapHeight - (mapWidth * 572 / 1153))/2 + "px";
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
  setTimeout(function(){ 
    showBalloon(index-1); 
  }, 500);
}

window.onload = function(event) {
  relocateMap();
}

window.onresize = function(event) {
  relocateMap();
}