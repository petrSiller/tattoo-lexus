<?php 
	$albumId = '150093019320';
	include "_fb-gallery.php"; ?>
<? include "_doctype.php"; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
	<head>
		<? include "_common.php"; ?>
        <meta name="keywords" content="tatto lexus, tetování, tetování brno, piercing, henna, pernamentní make-up, permanentní tetování" />
        <meta name="description" content="Náš tetovací salón v Brně nabízí různé vzory tetování. Navštivte nás ve studiu v Brně a vyberte si tetování dle vaší představy." />
        <title>Tetování Brno | Tattoo Lexus</title>
    </head>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="language" content="cz" />
		<link rel="stylesheet" href="css/style.css?2" type="text/css" media="screen" />
		<!--[if gte IE 5]>
			<link rel="stylesheet" href="css/ie.css?2" type="text/css" media="screen" />
		<![endif]-->
		<link rel="stylesheet" href="css/lightbox.css?3" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/jqueryLightbox.css?2" type="text/css" media="screen" />	
		<meta name="google-site-verification" content="6fiiL8dfGUu0BSckv6nZ-aZVtPzQ7ZH9ZYjEvZcYpo0" />
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
					<div id="photo1" class="gallery type1">
						<img src="img/renata.jpg" alt="ukázka tetování" class="mainPhoto" />
						<div class="group" id="photoThumbs">
							<?php
								for ($i = 0; $i < count($result[0]); $i++) {
									 echo '<a href="'.$result[0][$i]->images[1]->source.'" title= "ukázka tetování" >';
									 echo '<img src="'. $result[0][$i]->images[3]->source .'" alt="ukázka tetování" class="thumb1" />';
									 echo '</a>';
								}
							?>
						</div>
						<div id="more-photos" data-url="<?php echo $nextPage;?>">Další fotky</div>
					</div>
				</div>
				<div id="leftColumn">
					<h1 class="tattoo">Tattoo Lexus - tetování Brno<span></span></h1>
					<p>
						Tetování je v dnešní době čím dál tím více populární. Dříve to byla spíše výsada určité skupiny lidí, dnes se však s 
						<strong>tetováním</strong> můžete setkat prakticky na každém kroku. Nejenom na mužích ale i ženách můžete stále více pozorovat různé 
						vzory tetování, které mohou vyjadřovat názor člověka nebo pouze sloužit jako ozdoba vašeho těla. 
					</p>
					<p class="notice-text">Více fotografií a akcí najdete na naší <a href="https://www.facebook.com/pages/Tattoo-LEXUS/150088264320?sk=photos_stream">facebook stránce</a></p>
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
						nextPhotos();
					});
				/* ]]> */
				</script>
			</div>
		</div>
		<?php include "_footer.php"; ?>
    </body>
</html>