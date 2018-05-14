<?php
	include('scripts/language.php');
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Star Landscape Inc</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/theme-chipotle314.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/custom314.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/jquery.bxslider314.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/lightbox.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700" rel="stylesheet" type="text/css">
	<link href="css/font-montserrat.css" rel="stylesheet" type="text/css">
</head>

<body class="scroll-assist btn-rounded">

	<div class="nav-container">
		<nav class="absolute transparent">
			<div class="nav-bar">
				<div class="module left">
					<a href="home.php">
					<div class="vnu"><img class="logo logo-light" alt="Star-Landscape" src="img/logo/headerlogo-white.png"></div>
						<div class="vnu"><img class="logo logo-dark" alt="Star-Landscape" src="img/logo/headerlogo-black.png"></div>
					
					</a>
				</div>
				<div class="module widget-handle mobile-toggle right visible-sm visible-xs">
					<i class="ti-menu"></i>
				</div>
				<div class="module-group right">
					<div class="module left">
						<ul class="menu">
							<li class="vpf">
								<a href="/about.php" class="inner-link" target="_self"><?php echo trans('About Us'); ?></a>
							</li>
							<li>
								<a href="/services.php" class="inner-link" target="_self"><?php echo trans('Services'); ?></a>
							</li>
							<li class="vpf">
								<a href="/portfolio.php" class="inner-link" target="_self"><?php echo trans('Portfolio'); ?></a>
							</li>
							<li class="vpf">
								<a href="/request.php" class="inner-link" target="_self"><?php echo trans('Service Request Form'); ?></a>
							</li>
							<li class="vpf">
								<a href="/careers.php" class="inner-link" target="_self"><?php echo trans('Careers'); ?></a>
							</li>
							<li class="vpf">
								<a href="/contact.php" class="inner-link" target="_self"><?php echo trans('Contact Us'); ?></a>
							</li>
							<li class="vpf">
								<?php
									if ($base_lang == 'es') {
									echo '<a href="'.basename(__FILE__).'?lang=en">English</a>';
									} else {
									echo '<a href="'.basename(__FILE__).'?lang=es">Spanish</a>';
									}
								?>
							</li>
						</ul>
					</div>


				</div>

			</div>
		</nav>
	</div>

	<div class="main-container">
		<section class="cover fullscreen image-bg parallax">
			<div class="background-image-holder">
				<img alt="image" class="background-image cast-shadow" src="img/headers/home-header.jpg">
			</div>
			<div class="container v-align-transform mt160">
				<div class="row">
					<div class="col-sm-12 text-center">
						<img class="logo logo-light" alt="Star-Landscape" src="img/starlogowhite.png">
						<h1 class="large uppercase bold"><?php echo trans('Home Title'); ?></h1>
						<h5 class="uppercase mb0"><?php echo trans('Home Title Subtext'); ?></h5>
					</div>
				</div>

			</div>

			<div class="align-bottom relative-xs text-center">
			
				<button name="button" class="btn btn-filled mb32 mt-xs-40 btn-responsive">
				<a class="" href="http://www.starlandscapeinc.com/services.php"><?php echo trans('Home Button'); ?></a>
				</button>

			</div>
		</section>
            <footer class="footer-2 bg-dark text-center-xs">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<a href="/home.php"><div class="vnu"><img class="image-s fade-half" alt="Pic" src="img/logo/footerlogo.png"></div></a>
						</div>
					
						<div class="col-sm-4 text-center mt120">
							<span class="fade-half">
								<?php echo trans('Copywrite'); ?>
							</span>
						</div>
					
						<div class="col-sm-4 text-right text-center-xs fade-half mt64">
							<?php echo trans('Address'); ?>
							<p> CALIFORNIA’S STATE LICENSE #<br>C-27329274</p>
						</div>
					</div>
				</div>
			</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/masonry.min.js"></script>
	<script src="js/smooth-scroll.min.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/lightbox.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/jquery.bxslider.js"></script>
	<script src="https://cdn.jsdelivr.net/g/respond@1.4.2,html5shiv@3.7.3,selectivizr@1.0.3b"></script>

</body>

</html>