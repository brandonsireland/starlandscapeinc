<?php
	include('scripts/language.php');
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Services</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/theme-chipotle314.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/custom314.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/lightbox.min.css" rel="stylesheet">
	<link href="css/jquery.bxslider314.css" rel="stylesheet" type="text/css" media="all" />
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

		<section class="image-bg overlay pt240 pb240 pt-xs-180 pb-xs-180 overlay">
			<div class="background-image-holder-1">
				<img alt="image" class="background-image cast-shadow" src="img/headers/services-header.jpg">
			</div>
			<div class="background-image-holder">
				<img alt="image" class="background-image cast-shadow" src="img/headers/services-headermobile.jpg">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h1 class="mb0 uppercase bold italic large"><?php echo trans('Our Services'); ?></h1>
						<h5 class="uppercase mb32"></h5>
						<p class="lead mb0"> </p>
					</div>
				</div>

			</div>

		</section>
		<section>
			<div class="tab-content">
				<div class="container">
					<div class="row v-align-children">
						<div class="col-md-4 col-sm-5 mb-xs-24 text-left">
							<h3><?php echo trans('Landscape Care'); ?></h3>
							<ul>
								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Fertilization'); ?></li>

								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Insect and Disease Control'); ?></li>

								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Pruning'); ?></li>

								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Trimming'); ?></li>

								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Irrigation Repair'); ?></li>

								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Annual Color'); ?></li>

								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Weekly Mainenance Services'); ?></li>
							</ul>
						</div>
						<div class="col-md-7 col-md-offset-1 col-sm-6 col-sm-offset-1 text-center">
							<img class="cast-shadow" alt="Screenshot" src="img/projects/sunnycrest/sunnycrest7.jpg">
						</div>
					</div>

				</div>
			</div>

		</section>
		<section class="bg-secondary">
			<div class="tab-content">
				<div class="container">
					<div class="row v-align-children">
		                <div class="col-md-7 col-sm-6 text-center hidden-sm hidden-xs">
		                    <img class="cast-shadow" alt="Screenshot" src="img/projects/sunnycrest/sunnycrest3.jpg">
		                </div>
		                <div class="col-md-6 col-md-offset-1 col-sm-5 col-sm-offset-1">
		                    <h3>Landscape Construction</h3>
							<ul>
								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Concrete'); ?></li>

								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Pavers'); ?></li>

								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Brick'); ?></li>

								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Stone'); ?></li>

								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Shade Structures'); ?></li>
 
								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Decking'); ?></li>

								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Wood Fencing'); ?></li>
								
								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Grading'); ?></li>
								
								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Demolition'); ?></li>
								
								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Pool Removal'); ?></li>
								
								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Artificial Turf'); ?></li>
								
								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Natural Turf'); ?></li>
								
								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Irrigation'); ?></li>
								
								<li><i class="fa fa-check-circle-o"></i> <?php echo trans('Planting'); ?></li>
							</ul>
		                </div>
						<div class="col-md-7 col-sm-6 text-center visible-sm visible-xs hidden-md hidden-lg">
		                    <img class="cast-shadow" alt="Screenshot" src="img/sunnycrest3.jpg">
		                </div>
		            </div>


				</div>
			</div>
		</section>
		<footer class="footer-2 bg-dark text-center-xs">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<a href="/home.php">
							<div class="vnu"><img class="image-s fade-half" alt="Pic" src="img/logo/footerlogo.png"></div>
						</a>
					</div>

					<div class="col-sm-4 text-center mt120">
						<span class="fade-half">
								<?php echo trans('Copywrite'); ?>
							</span>
					</div>

					<div class="col-sm-4 text-right text-center-xs fade-half mt64">
						<?php echo trans('Address'); ?>
					</div>
				</div>
			</div>
		</footer>
	</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/smooth-scroll.min.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/scripts.js"></script>
	<script src="https://cdn.jsdelivr.net/g/respond@1.4.2,html5shiv@3.7.3,selectivizr@1.0.3b"></script>
</body>

</html>