<? include "_doctype.php"; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
	<head>
		<? include "_common.php"; ?>
        
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript">
			function initialize() {			
				var latlng = new google.maps.LatLng(49.1912919083634, 16.611316055059433);
		    	var myOptions = {
		    		zoom: 17,
		    		center: latlng,
		    		mapTypeId: google.maps.MapTypeId.ROADMAP
		    	};
		    	var map = new google.maps.Map(document.getElementById("map"),myOptions);
		    	
		    
				var marker = new google.maps.Marker({
					position: latlng, 
					map: map,
					title:"Tattoo lexus!"
				});
			
				var infowindow = new google.maps.InfoWindow ({ content: '<strong style="font-size: 115%">Tattoo lexus</strong><p>Masarykova 506/37 <br/>602 00 Brno-Město</p>', size: new google.maps.Size(50,50) });
			
				google.maps.event.addListener(marker, 'click', function() {
	    			infowindow.open(map,marker);
  				});
			}			
		</script>
		
		<meta name="keywords" content="tatto lexus, tetování, tetování brno, piercing, henna, pernamentní make-up, permanentní tetování" />
        <meta name="description" content="Tattoo Lexus Brno: nabízíme služby v oblasti tetování, piercing, henna, pernamentní makeup..." />
        <title>Kontakt: Tattoo Lexus Brno</title>	
	</head>
    <body class="page contact"  onload="initialize()">
		<div id="page">
			<?php
		    	$page = "contact";    
		    	include "_header.php";
			?>
			<div id="line"></div>
			<div id="mainContent" class="group">				
				<div id="mapColumn" class="group">
					<h2 class="contact">Kontakt<span></span></h2>
					<div id= "mapWrap">
						<div id="map" style="width: 100%; height: 300px; "></div>
					</div>		
				</div>
				<div id="leftColumn">
					<ul id="address">
						<li class="address">Masarykova 37</li>
						<li class="city">Brno <span class="zipCode">602 00</span></li>
					</ul>
					<h3>Kdy máme otevřeno</h3>
					<p>Pondělí - Pátek od 10:00 do 17:00</p>
					<h3>Kontaktujte nás</h3>
					<ul>
						<li>Roman +420 603 100 922</li>
						<li>Renata +420 603 279 552</li>
						<li>E-mail: <a href="mailto:tattoolexus@tattoolexus.cz">tattoolexus@tattoolexus.cz</a></li>
					</ul>
				</div>
				<div id="links" class="group">
					<h3>Zajímavé odkazy</h3>
					<ul>
			            <li>
			                <a href="http://www.autochip.eu" title="Profesionální ChipTuning - zvýšení výkonu a snížení spotřeby">AutoChip - ChipTuning</a>
			            </li>
			            <li>
			                <a href="http://www.skodachip.cz" title="ChipTuning - Škoda, VW, Audi, Seat">ChipTuning</a>
			            </li>
			            <li>
			                <a href="http://www.barclub21.cz/" title="Bar, hospoda v centru Brna">Club 21</a>
			            </li>
            		</ul>
            		<ul>
			            <li>
			                <a href="http://www.online-firmy.com" title="">Online-firmy.com</a>
			            </li>
			            <li>
			                <a href='http://www.marre.cz'title='piercing a šperky z chirurgické oceli'>MARRE style</a>
			            </li>
			        </ul>
			        <ul>
			            <li>
			            	<a href="http://etetovani.cz" title="Motivy tetování a vzory tetování, tattoo">Motivy tetování a vzory tetování, tattoo</a>
			            </li>
						<li>
			            	<a href="http://www.rosemary.cz" title="">Studio Rosemary - tetování, tattoo, piercing</a>
			            </li>			
			        </ul>
				</div>
				<script type="text/javascript">
				/* <![CDATA[ */ 					
					$(document).ready(function() {
	   					
	   					/* Set hover effect on thmubs */
						$(".gallery img").hover(function() {
	     					$(this).addClass("active");
	   					});
	   					
	   					$(".gallery img").mouseout(function() {
	     					$(this).removeClass("active");
	   					});
						   
						/* Set lightbox */
	   					$(function() {
	        				$('.gallery a').lightBox();
	    				});	   				
					});
					
				
				
				/* ]]> */	
				</script>
			</div>
		</div>
		<?php include "_footer.php"; ?>
    </body>
</html>