var changeHeaderImage, resize;

changeHeaderImage = function(index) {
  var carousel, color, dots, headerImage, i;
  headerImage = document.getElementsByClassName('headerImage');
  carousel = document.getElementById('carousel');
  carousel.style.backgroundImage = 'url(\'' + headerImage[index].value + '\')';
  dots = document.getElementsByTagName('circle');
  i = 0;
  while (i < dots.length) {
    color = i === index ? 'white' : 'rgba(240,240,240, 0.3)';
    dots[i].setAttribute('fill', color);
    i++;
  }
  return true;
};

resize = function() {
  var h, w;
  if (document.getElementById('bgDiv') == null) {
        return;
  }
  w = document.getElementById('bgDiv').offsetWidth;
  h = document.getElementById('bgDiv').offsetHeight;
  if (w > 530) {
    document.getElementById('img').setAttribute('width', w);
    document.getElementById('img').setAttribute('height', w);
    document.getElementById('img').setAttribute('x', 0);
    document.getElementById('img').setAttribute('y', '-' + (w - h) / 2);
  } else {
    document.getElementById('img').setAttribute('width', 1000);
    document.getElementById('img').setAttribute('height', h);
    document.getElementById('img').setAttribute('x', -240);
    document.getElementById('img').setAttribute('y', 0);
  }
};

window.onresize = function(event) {
  resize();
};

window.onload = function(event) {
  resize();
};
