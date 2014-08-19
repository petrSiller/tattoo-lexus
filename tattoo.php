<? include "_doctype.php"; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
	<head>
		<? include "_common.php"; ?>
        <meta name="keywords" content="tatto lexus, tetování, tetování brno, piercing, henna, pernamentní make-up, permanentní tetování" />
        <meta name="description" content="Náš tetovací salón v Brně nabízí různé vzory tetování. Navštivte nás ve studiu v Brně a vyberte si tetování dle vaší představy." />
        <title>Tetování Brno | Tattoo Lexus</title>
    </head>
    <body class="page">
		<div id="page">
			<?php
		    	$page = "tattoo";    
		    	include "_header.php";
			?>
			<div id="line"></div>

			<div id="mainContent" class="group">
				<div id="gallery" class="group">
					<div id="photo1" class="gallery">
						<img src="img/renata.jpg" alt="ukázka tetování" class="mainPhoto" />
						<?php
					
							// Include the UberGallery class
							include('resources/UberGallery.php');

						    // Initialize the UberGallery object
						    $gallery = new UberGallery();

						    // Initialize the gallery array
						    $galleryArray = $gallery->readImageDirectory('gallery-tattoo');

						    // Define theme path
						    if (!defined('THEMEPATH')) {
						        define('THEMEPATH', $gallery->getThemePath());
						    }

						    // Set path to theme index
						    $themeIndex = $gallery->getThemePath(true) . '/index.php';

						    // Initialize the theme
						    if (file_exists($themeIndex)) {
						        include($themeIndex);
						    } else {
						        die('ERROR: Failed to initialize theme');
						    }
						?>
					</div>
					<div id="paging">
						<a href="#photo1" class="active">1</a>
						<a href="#photo2" >2</a>
						<a href="#photo3" >3</a>
					</div>
				</div>
				<div id="leftColumn">
					<h1 class="tattoo">Tattoo Lexus - tetování Brno<span></span></h1>
					<p>
						Tetování je v dnešní době čím dál tím více populární. Dříve to byla spíše výsada určité skupiny lidí, dnes se však s 
						<strong>tetováním</strong> můžete setkat prakticky na každém kroku. Nejenom na mužích ale i ženách můžete stále více pozorovat různé 
						vzory tetování, které mohou vyjadřovat názor člověka nebo pouze sloužit jako ozdoba vašeho těla. 
					</p>
					<p>V našem <a href="/studio.php">studiu v Brně</a> děláme <strong>tetování</strong> jak klasická tak <a href="/permanentni-make-up">pernamentní</a>.</p>
					<h2>Dobře si tetování rozmyslete</h2>
					<p>
						Ať už se rozhodnete pro tetování z jakéhokoli důvodu, je dobré (a velice to doporučujeme) si umístění a vzor tetování dobře 
						promyslet. <a href="/tetovani-opravy">Odstranění tetování</a> je totiž poměrně nákladný zákrok a pokaždé se nemusí odstranění povést beze stop.  
					</p>
					<p>
						Můžete se také zastavit v našem studiu, kde vám rádi ohledně tetování poradíme.
					</p>
					<h3>Jak se o tetování starat</h3>
					<p>
						Hojení <strong>nového tetování</strong> můžeme přirovnat k hojení povrchové odřeniny. Na kůži se po tetování vytvoří stroupky, které časem 
						samy odpadnou. Proto se je nesnažte sami strhnout. K úplnému zahojení dochází přibližně po 6 týdnech. Po dobu 
						jednoho měsíce se snažte nevystavovat tetování přímému slunci nebo soláriu. Také se po tuto dobu snažte tetování příliš 
						nenamáčet. Čerstvé tetování je potřeba mazat nějakým hojivým krémem, a to minimálně jeden týden
					</p>
					<h3>Potřebujete poradit?</h3>
					<p>Napište nám nám svůj dotaz na <a href="http://www.facebook.com/pages/Tattoo-LEXUS/150088264320" onClick="javascript:pageTracker._trackPageview('/virtual/facebook');">facebook</a> a nebo nás <a href="/kontakt">kontatkujte</a> přímo</p>
					<a href="http://www.facebook.com/pages/Tattoo-LEXUS/150088264320" class="button" onClick="javascript:pageTracker._trackPageview('/virtual/facebook');">Napište nám na facebook</a>
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
					
						/* Set active gallery*/	
						$(".gallery").hide();
						$("#paging a:first").addClass("active").show();
						$("#photo1").show(); 
		
						//Switch gallery on click
						$("#paging a").click(function() {
							$("#paging a").removeClass("active"); 
							$(this).addClass("active"); 
							$(".gallery").hide();
							var activeTab = $(this).attr("href"); 
							$(activeTab).show(); 
							//return false;
						}); 
					
					});
				/* ]]> */	
				</script>
			</div>
		</div>
		<?php include "_footer.php"; ?>
    </body>
</html>