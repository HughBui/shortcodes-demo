window.onresize = function(event) {
  resize();
};

window.onload = function(event) {
  resize();
};

function resize(){
      var w = document.getElementById('bgDiv').offsetWidth;
      var h = document.getElementById('bgDiv').offsetHeight;
      if (w > 530) {
        document.getElementById('img').setAttribute("width", w);
        document.getElementById('img').setAttribute("height", w);
        document.getElementById('img').setAttribute("x", 0);
        document.getElementById('img').setAttribute("y", "-" + (w - h) / 2);
      } else {
        document.getElementById('img').setAttribute("width", 1000);
        document.getElementById('img').setAttribute("height", h);
        document.getElementById('img').setAttribute("x", -240);
        document.getElementById('img').setAttribute("y", 0);
      }
    }


