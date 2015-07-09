<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="icon" type="image/png" href="static/favicon.png" />
	<!-- 

<link rel="stylesheet" type="text/css" href="../taphouse/style.css">
<script type="text/javascript" src="../taphouse/script.js"></script>
-->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="grid.css">
<link rel="stylesheet" type="text/css" href="menu.css">
<link rel="stylesheet" type="text/css" href="responsive.css">
<link rel="stylesheet" type="text/css" href="animation.css">
<script type="text/javascript" src="script.js"></script>

<script>
function test(node){
	for (var i=0; (node=node.previousSibling); i++);
	console.log(Math.floor(i/4));
}

 function toggle(node){
		for (var i=0; (node=node.previousSibling); i++);
		var index = Math.floor(i/4);

		var toggle = document.getElementsByClassName("toggle");
		var toggleContent = document.getElementsByClassName("toggleContent");
		
		for(var i = 0; i < toggle.length; i++){
			toggle[i].innerHTML = (i == index ? '--' : '+' );
			toggle[i].style.backgroundColor = (i == index ? '#001937' : 'grey' );
			toggleContent[i].style.display = (i == index ? '' : 'none' );

		}
		return true;
	}
	
window.onload = function(e){ 
	 	toggle(0); 
	}
</script>

<style>
	.collapsible *{
		text-align: left !important;
		margin: 0 auto auto 0 !important;
	}
	
	.collapsible .toggle{
		display: inline-block;
		text-align: center !important;
		padding: 5px 9px !important;
		margin-top: -10px !important;
		margin-right: 20px !important;
		color: white;
		cursor: pointer;
	}
	
	.collapsible .toggleTitle{
		font-size: 20px;
		color: #003b81;
		font-family: Arial Rounded MT Bold, Helvetica Rounded, Arial, sans-serif;
		font-weight: bold;
	}
</style>

</head>
<body>
		<div class="container content">
			<div class="row" >
				<div class="col col-span-1 collapsible">
						<h3>asdasd asdas as das das d asd asd as</h3>
						<div>
							<span class="toggle" onclick="return toggle(this.parentNode)">-</span>
							<span class="toggleTitle">Control & Influence</span>
						</div>
						<p class="toggleContent small">
							1 blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
							blah blah blah blah blah blah blah blah blah blah 
						</p>
						
						<div>
							<span class="toggle" onclick="return toggle(this.parentNode)">-</span>
							<span class="toggleTitle">Lifecycle of designated products</span>
						</div>
						<p class="toggleContent small">
							2 asdas blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
							blah blah blah blah blah blah blah blah blah blah 
						</p>
						
						<div>
							<span class="toggle" onclick="return toggle(this.parentNode)">-</span>
							<span class="toggleTitle">Lifecycle of designated products</span>
						</div>
						<p class="toggleContent small">
							3 asdas blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
							blah blah blah blah blah blah blah blah blah blah 
						</p>
						
						<div>
							<span class="toggle" onclick="return toggle(this.parentNode)">-</span>
							<span class="toggleTitle">Lifecycle of designated products</span>
						</div>
						<p class="toggleContent small">
							4 asdas blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
							blah blah blah blah blah blah blah blah blah blah 
						</p>
				</div>
				<div class="col col-span-1 middle-center" style="border: 1px solid black;">
					<img src="http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=2848800"/>
				</div>

			</div>
		</div>
		
		<div class="container content  blog">
			<div class="row ">				
				<div class="col col-span-4" style="border: 1px solid red; display: block;">
					<img style="vertical-align:middle; margin-right: 30px !important;" src="http://localhost/jmg/wp-content/themes/jmg/static/projects/icon_commercial.png"/>
					<p style="display: inline;">Commercial</p>
				</div>
			

				<div class="col col-span-4" style="border: 1px solid red; display: block;">
					<img style="vertical-align:middle; margin-right: 30px !important;" src="http://localhost/jmg/wp-content/themes/jmg/static/projects/icon_commercial.png"/>
					<p style="display: inline;">Commercial</p>
				</div>
				
				<div class="col col-span-4" style="border: 1px solid red; display: block;">
					<img style="vertical-align:middle; margin-right: 30px !important;" src="http://localhost/jmg/wp-content/themes/jmg/static/projects/icon_commercial.png"/>
					<p style="display: inline;">Commercial</p>
				</div>
				
				<div class="col col-span-4" style="border: 1px solid red; display: block;">
					<img style="vertical-align:middle; margin-right: 30px !important;" src="http://localhost/jmg/wp-content/themes/jmg/static/projects/icon_commercial.png"/>
					<p style="display: inline;">Commercial</p>
				</div>

				<div class="col col-span-4" style="border: 1px solid red; display: block;">
					<img style="vertical-align:middle; margin-right: 30px !important;" src="http://localhost/jmg/wp-content/themes/jmg/static/projects/icon_commercial.png"/>
					<p style="display: inline;">Commercial</p>
				</div>
				
				<div class="col col-span-4" style="border: 1px solid red; display: block;">
					<img style="vertical-align:middle; margin-right: 30px !important;" src="http://localhost/jmg/wp-content/themes/jmg/static/projects/icon_commercial.png"/>
					<p style="display: inline;">Commercial</p>
				</div>
				
				<div class="col col-span-4" style="border: 1px solid red; display: block;">
					<img style="vertical-align:middle; margin-right: 30px !important;" src="http://localhost/jmg/wp-content/themes/jmg/static/projects/icon_commercial.png"/>
					<p style="display: inline;">Commercial</p>
				</div>
				
				<div class="col col-span-4" style="border: 1px solid red; display: block;">
					<img style="vertical-align:middle; margin-right: 30px !important;" src="http://localhost/jmg/wp-content/themes/jmg/static/projects/icon_commercial.png"/>
					<p style="display: inline;">Commercial</p>
				</div>
				<div class="col col-span-4" style="border: 1px solid red; display: block;">
					
				</div>
			</div>	
		</div>
</body>
</html>
