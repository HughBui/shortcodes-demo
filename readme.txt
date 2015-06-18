
https://projects.invisionapp.com/share/KE329258C#/screens/77916770?maintainScrollPosition=false

https://projects.invisionapp.com/share/KE329258C#/screens/77917300?maintainScrollPosition=false


	function changeBannerImage(node){
		for (var i = 0; (node = node.previousSibling); i++);
		var index = i/4 - 0.75;
		var bannerImg = document.getElementsByClassName("bannerImage");
		document.getElementById("bgDiv").style.backgroundImage = "url('"+ bannerImg[index].value +"')";

		var dots = document.getElementsByTagName("circle");
		for(var i = 0; i < dots.length; i++){
			dots[i].setAttribute("fill", (i == index ? "white" : "rgba(240,240,240, 0.3)"));
		}
		return true;
	}
	
<div id="bgDiv" class="container content header bgDiv" style="background: url('static/banner_images/home_header.jpg') no-repeat;background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-position: center center;">

 		<div class="row narrow">
			<div class="col col-span-1 middle-left" style="width:100%;">
				<h1>aasdasdas asd asdas </h1>
				<h1>aasdasdas asd asdas </h1>
				<p>a asdasd asdsad asdasd as</p>
				<p>a asdasd asdsad asdasd as</p>
				<span style="position:relative; bottom: -50px; top: 50px;">
					<input type="hidden" class="bannerImage" value="static/banner_images/home_header.jpg"/>
					<svg height="40" width="40" style="z-index: 2; cursor: pointer;" onclick="return changeBannerImage(this)">
					  <circle cx="20" cy="20" r="10" stroke="grey" stroke-width="1" fill="white" />
					</svg>
					<input type="hidden" class="bannerImage" value="static/banner_images/about_header.jpg"/>
					<svg height="40" width="40" style="z-index: 2; cursor: pointer;" onclick="return changeBannerImage(this)">
					  <circle cx="20" cy="20" r="10" stroke="grey" stroke-width="1" fill="rgba(240,240,240, 0.3)" />
					</svg>
					<input type="hidden" class="bannerImage" value="static/banner_images/contact_header.jpg"/>
					<svg height="40" width="40" style="z-index: 2; cursor: pointer;" onclick="return changeBannerImage(this)">
					  <circle cx="20" cy="20" r="10" stroke="grey" stroke-width="1" fill="rgba(240,240,240, 0.3)" />
					</svg>
					<input type="hidden" class="bannerImage" value="static/banner_images/projects_header.jpg"/>
					<svg height="40" width="40" style="z-index: 2; cursor: pointer;" onclick="return changeBannerImage(this)">
					  <circle cx="20" cy="20" r="10" stroke="grey" stroke-width="1" fill="rgba(240,240,240, 0.3)" />
					</svg>
				</span> 
			</div>
		</div>
	</div>
	
	
	







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
