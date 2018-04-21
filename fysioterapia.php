<!DOCTYPE html>
<html lang="en">
	<head> <!-- test -->
		<title>Irinan ilopilkku</title>
		<meta charset="utf-8">
		<meta name="description" content="Hermoratahieronta, klassinen hieronta ja fysioterapia. Lue lisää ja varaa aikasi!">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- icon -->
		<link rel="icon" href="img/icon_irina.png" type="image/x-icon" />
		<!-- css -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">
		<link href="color/default.css" rel="stylesheet" media="screen">
		<!-- js -->
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="menu-area">
			<div id="dl-menu" class="dl-menuwrapper">
				<button class="dl-trigger">Open Menu</button>
				<ul class="dl-menu">
					<li><a href="index.php">Etusivu</a></li>
					<li>
						<a href="#">Sivut</a>
						<ul class="dl-submenu">
							<li><a href="hermoratahierontaa.php">Hermoratahierontaa</a></li>
							<li><a href="klassinen_hieronta.php">Klassinen Hieronta</a></li>
							<!--<li><a href="kotikuntoutusta.php">Kotikuntoutusta</a></li>-->
							<li><a href="fysioterapia.php">Fysioterapia</a></li>
							<li><a href="hinnasto.php">Hinnasto</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /dl-menuwrapper -->
		</div>

		<!-- TODO: Create own CSS style for this information -->
		<!-- About -->
		<section id="about" class="home-section bg-white">
			<div class="container">
				<!-- Guide: http://getbootstrap.com/css/ -->
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<div class="section-heading">
							<h2>Fysioterapia</h2>
							<!-- <p>Tarjoamme hieronta palveluja.</p> -->
						</div>
					</div>
				</div>
				<div class="row">
					<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
					<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
						<div class="box-team">
							<!--<h4>Lisää tietoa tulossa.</h4>-->
							<p>Kela korvaa osan fysioterapiasta, mikäli olet saanut lääkärin allekirjoittaman fysioterapialähetteen ja sinulla on voimassa oleva kela-kortti. 
								Käytössä on suorakorvausmenettely, jolloin korvausta ei tarvitse hakea itse, vaan se on vähennetty suoraan <a href="hinnasto.php">fysioterapian hinnoista</a>. 
								Lääkärin lähete on voimssa vuoden kirjoituspäivästä alkaen. </p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>Page created by <a href="https://www.linkedin.com/in/lordmikefin">Mikko Niemelä ( <img alt="" border="0" src="img/lordmike_white.svg"> ).</a> Copyright &copy;2015 <a href="https://www.linkedin.com/in/lordmikefin">Mikko Niemelä</a>. All rights reserved.</p>
						<p>This page is using <a href="http://www.free-css.com/free-css-templates/page183/mamba#shout">Mamba Free CSS Template</a>. Copyright &copy;2014 Mamba company. All rights reserved. By <a href="http://bootstraptaste.com">Bootstraptaste</a></p>
					</div>
				</div>		
			</div>	
		</footer>

		<!-- js -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.smooth-scroll.min.js"></script>
		<script src="js/jquery.dlmenu.js"></script>
		<script src="js/wow.min.js"></script>
		<script>
			(function ($) {
				$( '#dl-menu' ).dlmenu();
				$('ul.dl-menu li a').smoothScroll();

				// $( '#dl-menu' ).openMenu;
				$('#dl-menu').dlmenu("openMenu");

				//animation
				// new WOW().init();

			})(jQuery);
		</script>

		<!-- google analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-68045710-1', 'auto');
			ga('send', 'pageview');
		</script>

	</body>
</html>
