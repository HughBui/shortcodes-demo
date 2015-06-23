
https://projects.invisionapp.com/share/KE329258C#/screens/77916770?maintainScrollPosition=false

https://projects.invisionapp.com/share/KE329258C#/screens/77917300?maintainScrollPosition=false

        function toggle(index){
		var toggle = document.getElementsByClassName("toggle");
		var toggleContent = document.getElementsByClassName("toggleContent");
		
		for(var i = 0; i < toggle.length; i++){
			toggle[i].innerHTML = (i == index ? '-' : '+' );
			toggle[i].style.backgroundColor = (i == index ? '#001937' : 'grey' );
			toggleContent[i].style.display = (i == index ? '' : 'none' );

		}
		return true;
	}
	

	window.onload = function(e){ 
	 	toggle(0); 
	}
	
	<div class="container content">
			<div class="row narrow" >
				<div class="col col-span-1 collapsible" style="border: 1px solid black;">
						<div>
							<span class="toggle" onclick="return toggle('0')">-</span>
							<span class="toggleTitle">Control & Influence</span>
						</div>
						<p class="toggleContent small">
							1 blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
							blah blah blah blah blah blah blah blah blah blah 
						</p>
						<div>
							<span class="toggle" onclick="return toggle('1')">-</span>
							<span class="toggleTitle">Lifecycle of designated products</span>
						</div>
						<p class="toggleContent small">
							2 asdas blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
							blah blah blah blah blah blah blah blah blah blah 
						</p>
						<div>
							<span class="toggle" onclick="return toggle('2')">-</span>
							<span class="toggleTitle">Lifecycle of designated products</span>
						</div>
						<p class="toggleContent small">
							3 asdas blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
							blah blah blah blah blah blah blah blah blah blah 
						</p>
						<div>
							<span class="toggle" onclick="return toggle('3')">-</span>
							<span class="toggleTitle">Lifecycle of designated products</span>
						</div>
						<p class="toggleContent small">
							4 asdas blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
							blah blah blah blah blah blah blah blah blah blah 
						</p>
				</div>
				<div class="col col-span-1 middle-center" style="border: 1px solid black;">
					<img src="c.jpg"/>
				</div>

			</div>
		</div>
