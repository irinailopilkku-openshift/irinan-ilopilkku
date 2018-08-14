<!DOCTYPE html>
<html lang="en">
	<head> <!-- test -->
		<title>Irinan ilopilkku</title>
		<meta charset="utf-8">
		<meta name="keywords" content="Hinnasto">
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
							<h2>Hinnasto</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
					<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">
						<div class="box-team">
							<div>

								<h3 style="text-align: left;">Hieronta</h3>
								<table style="width:100%;">
									<tr>
										<td>45 min</td> 
										<td>38 €</td>
									</tr>
									<tr>
										<td>60 min</td> 
										<td>47 €</td>
									</tr>
									<tr>
										<td>75 min</td> 
										<td>55 €</td>
									</tr>
									<tr>
										<td>90 min</td> 
										<td>63 €</td>
									</tr>
									<tr>
										<td>105 min</td> 
										<td>70 €</td>
									</tr>
									<tr>
										<td>120 min</td> 
										<td>77 €</td>
									</tr>
									<tr>
										<td></td> 
										<td></td>
									</tr>
								</table>

								<h3 style="text-align: left;">Fysioterapia lääkärin lähetteellä</h3>
								<h4 style="text-align: left;">(Kelakorvaus vähennetty hinnasta)</h4>
								<table style="width:100%;">
									<tr>
										<td>30 min</td> 
										<td>28 €</td>
									</tr>
									<tr>
										<td>45 min</td> 
										<td>32 €</td>
									</tr>
									<tr>
										<td>60 min</td> 
										<td>39 €</td>
									</tr>
									<tr>
										<td></td> 
										<td></td>
									</tr>
								</table>

								<h3 style="text-align: left;">Kuumakivihieronta</h3>
								<table style="width:100%;">
									<tr>
										<td>puolivartalo</td> 
										<td>42 €</td>
									</tr>
									<tr>
										<td>kokovartalo</td> 
										<td>69 €</td>
									</tr>
									<tr>
										<td></td> 
										<td></td>
									</tr>
								</table>

								<h3 style="text-align: left;">Hermoratahieronta</h3>
								<table style="width:100%;">
									<tr>
										<td>1,5-2h</td> 
										<td>75 €</td>
									</tr>
									<tr>
										<td></td> 
										<td></td>
									</tr>
								</table>

							</div>
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
