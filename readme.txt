<html>
<head>
<script type="text/javascript">
	function resize(){
		var w = document.getElementById('div').offsetWidth;
		var h = document.getElementById('div').offsetHeight;
		if (w > h) {
			document.getElementById('img').setAttribute("width", w);
			document.getElementById('img').setAttribute("height", w);
			document.getElementById('img').setAttribute("x", 0);
			document.getElementById('img').setAttribute("y", "-" + (w - h) / 2);
		} else {
			document.getElementById('img').setAttribute("width", h);
			document.getElementById('img').setAttribute("height", h);
			document.getElementById('img').setAttribute("y", "-" + 0);
			document.getElementById('img').setAttribute("x", "-" + (h - w) / 2);
		}
	}
	window.onload = function(e) {
		resize();
	}

	window.onresize = function(event) {
		resize();
	};
</script>
<style>
div {
	position: relative;
	overflow: hidden;
	color: red;
	background: rgba(255,255,255,0.7); 
}

div>svg {
	position: absolute;
	top: 0px;
	left: 0px;
	z-index: -10;
}
</style>
</head>
<body>
	<div id="div" style="width: 100%;">
		<svg xmlns="http://www.w3.org/2000/svg" id="svgroot" width="100%"
			height="100%">
	  <defs>
	     <filter id="filtersPicture">
	       <feComposite result="inputTo_38" in="SourceGraphic"
				in2="SourceGraphic" operator="arithmetic" k1="0" k2="1" k3="0"
				k4="0" />
	       <feColorMatrix id="filter_38" type="saturate" values="0"
				data-filterid="38" />
	    </filter>
	  </defs>
	  <image id="img" filter="url(&quot;#filtersPicture&quot;)"
				xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="c.jpg" /></svg>
		dasdas<br /> dsad<br /> asd<br /> asd<br /> asd<br /> asd<br /> as<br />
		as<br /> as<br /> as<br /> as<br /> as<br /> as<br /> as<br />
	</div>
</body>
</html>






.col.top-left * {
	text-align: left;
	margin: 0 auto auto 0;
}

.col.top-center * {
	margin: 0 auto auto auto;
}

.col.top-right * {
	text-align: right;
	margin: 0 0 auto auto;
}

.col.middle-left * {
	text-align: left;
	margin: auto auto;
}

.col.middle-center * {
	margin: auto auto;
}

.col.middle-right * {
	text-align: right;
	margin: auto auto;
}

.col.bottom-left * {
	text-align: left;
	margin: auto auto 0 0;
}

.col.bottom-center * {
	margin: auto auto 0 auto;
}

.col.bottom-right * {
	text-align: right;
	margin: auto 0 0 auto;
}
















<html>
<head>
<script type="text/javascript">
	function toggleMe(a){
var e=document.getElementById(a);
if(!e)return true;
if(e.style.display=="none"){
e.style.display="block"
}
else{
e.style.display="none"
}
return true;
}

</script>
<style>


</style>
</head>
<body>
	
	<div onclick="return toggleMe('para1')">+</div>
<p id="para1">
blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
</p>
<br>
<input type="button" onclick="return toggleMe('para2')" value="Toggle"><br>
<div id="para2">
blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
</div>
<br>
<input type="button" onclick="return toggleMe('para3')" value="Toggle"><br>
<span id="para3">
blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
</span>
	
</body>
</html>
