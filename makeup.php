<? include "_doctype.php"; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
	<head>
		<? include "_common.php"; ?>
        <meta name="keywords" content="tatto lexus, tetování, tetování brno, piercing, henna, pernamentní make-up, permanentní tetování" />
        <meta name="description" content="Nabízíme permanentní make-up v Brně, také nazývané jako permanentní tetování. Přijde do našeho Brněnského salonu." />
        <title>Permanentní make-up Brno | Tattoo Lexus</title>
    </head>
    <body class="page makeup">
		<div id="page">
			<?php
		    	$page = "makeup";    
		    	include "_header.php";
			?>
			<div id="line"></div>
			<div id="mainContent" class="group">
				<div id="gallery" class="group">
					<h2 class="makeup">Galerie<span></span></h2>
					<div class="gallery2">								
						<a href="img/gallery/makeup1/06.jpg" title="Permanentní make-up ">
							<img src="img/gallery/makeup1/thumb/06.jpg" alt="Permanentní make-up" class="thumb" />
						</a>
						<a href="img/gallery/makeup1/05.jpg" title="Permanentní make-up ">
							<img src="img/gallery/makeup1/thumb/05.jpg" alt="Permanentní make-up" class="thumb" />
						</a>
						<a href="img/gallery/makeup1/04.jpg" title="Permanentní make-up ">
							<img src="img/gallery/makeup1/thumb/04.jpg" alt="Permanentní make-up " class="thumb" />
						</a>
						<a href="img/gallery/makeup1/03.jpg" title="Permanentní make-up ">
							<img src="img/gallery/makeup1/thumb/03.jpg" alt="Permanentní make-up " class="thumb" />
						</a>
						<a href="img/gallery/makeup1/02.jpg" title="Permanentní make-up ">
							<img src="img/gallery/makeup1/thumb/02.jpg" alt="Permanentní make-up " class="thumb" />
						</a>
						<a href="img/gallery/makeup1/01.jpg" title="Permanentní make-up ">
							<img src="img/gallery/makeup1/thumb/01.jpg" alt="Permanentní make-up " class="thumb" />
						</a>

						<a href="img/gallery/makeup1/07.jpg" title="Permanentní make-up ">
							<img src="img/gallery/makeup1/thumb/07.jpg" alt="Permanentní make-up " class="thumb" />
						</a>
						<a href="img/gallery/makeup1/08.jpg" title="Permanentní make-up ">
							<img src="img/gallery/makeup1/thumb/08.jpg" alt="Permanentní make-up " class="thumb" />
						</a>
						<a href="img/gallery/makeup1/09.jpg" title="Permanentní make-up ">
							<img src="img/gallery/makeup1/thumb/09.jpg" alt="Permanentní make-up " class="thumb" />
						</a>
						<a href="img/gallery/makeup1/10.jpg" title="Permanentní make-up ">
							<img src="img/gallery/makeup1/thumb/10.jpg" alt="Permanentní make-up " class="thumb" />
						</a>
					</div>
				</div>
				<div id="leftColumn">
					<h1 class="makeup">Tattoo Lexus – pernamentni make-up Brno<span></span></h1>
					<p>
						Nabízíme <strong>permanentní make-up v Brně</strong> nebo taky <strong>permanentní tetování</strong> metodou, při které se velmi tenkou jehlou vpravují těsně pod kůži barevné 
						pigmenty. Díky této metodě je možné více zvýraznit ústa, obočí nebo oční linky. I tuto službu nabízíme v našem studiu 
						Tattoo Lexus.
					</p>
					<h2>Obočí</h2>
					<p>Díky permanentnímu make-upu dokreslíme Vaše obočí tak, aby působilo velmi precizně a přirozeně.</p>
					<h2>Oční linky</h2>
					<p>Zvýraznění očních linek pomocí <strong>permanentního make-upu</strong> Vám usnadní každodenní líčení a dodá Vašim řasám skutečný objem.</p>
					<h2>Rty</h2>
					<p>Pomocí permanentního make-upu lze také rozšířit Vaše rty a dosáhnout tak plného vzhledu. Dále je možné tímto způsobem odstranit disproporce v symetričnosti úst.</p>
					<h3>Naše ceny za makeup</h3>
					<dl>
						<dt>kontura rtů	</dt><dd>3500,- Kč</dd>
						<dt>obočí</dt><dd>3500,- Kč</dd>
						<dt>horní linky</dt><dd>2400,- Kč</dd>
					</dl>
					<h3>Potřebujete poradit?</h3>
					<p>Napište nám nám svůj dotaz na <a href="http://www.facebook.com/pages/Tattoo-LEXUS/150088264320" onClick="javascript:pageTracker._trackPageview('/virtual/facebook');">facebook</a> a nebo nás <a href="/kontakt">kontatkujte</a> přímo</p>
					<a href="http://www.facebook.com/pages/Tattoo-LEXUS/150088264320" class="button" onClick="javascript:pageTracker._trackPageview('/virtual/facebook');">Napište nám na facebook</a>
				</div>
	
				<script type="text/javascript">
				/* <![CDATA[ */ 					
					$(document).ready(function() {
	   					
	   					/* Set hover effect on thmubs */
						$(".gallery2 img").hover(function() {
	     					$(this).addClass("active");
	   					});
	   					
	   					$(".gallery2 img").mouseout(function() {
	     					$(this).removeClass("active");
	   					});
						   
						/* Set lightbox */
	   					$(function() {
	        				$('.gallery2 a').lightBox();
	    				});	   				
					});
					
				
				
				/* ]]> */	
				</script>
			</div>
		</div>
		<?php include "_footer.php"; ?>
    </body>
</html>