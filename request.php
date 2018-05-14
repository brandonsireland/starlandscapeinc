<?php
	include('scripts/language.php');
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Service Request</title>
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
			<div class="background-image-holder">
				<img alt="image" class="background-image cast-shadow" src="img/headers/request-header.jpeg">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h1 class="mb0 uppercase bold italic large"><?php echo trans('Service Request Form'); ?></h1>
						<h5 class="uppercase mb32"></h5>
						<p class="lead mb0"> </p>
					</div>
				</div>

			</div>

		</section>


		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-8 col-md-offset-2" contenteditable>
						<h3 class=""><?php echo trans('Service Request'); ?></h3>
						<p>
							<?php echo trans('Please Fill'); ?>
						</p>
							<form class='form-email' data-success='<?php echo trans('Thank You'); ?>' data-error='<?php echo trans('Please fill all fields correctly'); ?>'>
							<input name='form-id' type='hidden' value='form-2'>
							<div class='two-col'>
								<div class='col1'>
									<input type='text' class='validate-required' name='first-name' placeholder='<?php echo trans('First Name'); ?>'>
								</div>
								<div class='col2'>
									<input type='text' class='validate-required' name='last-name' placeholder='<?php echo trans('Last Name'); ?>'>
								</div>
							</div>
							<input type='text' class='validate-required' name='property' placeholder='<?php echo trans('Property Name'); ?>'>
							<div class='two-col'>
								<div class='col1'>
									<input type='text' name='cell-number' placeholder='<?php echo trans('Cell Phone'); ?>'>
								</div>
								<div class='col2'>
									<input type='text' class='validate-required' name='phone-number' placeholder='<?php echo trans('Phone Number'); ?>' title='required'>
								</div>
							</div>
							<input type='text' class='validate-required validate-email' name='email' placeholder='<?php echo trans('Email Address'); ?>'>
							<div class='two-col'>
								<div class='col1'>
									<input type='text' class='validate-required' name='address-1' placeholder='<?php echo trans('Street Address'); ?>'>
								</div>
								<div class='col2'>
									<input type='text' name='address-2' placeholder='<?php echo trans('Street Address 2'); ?>'>
								</div>
							</div>
							<div class='two-col'>
								<div class='col1'>
									<input type='text' class='validate-required' name='city' placeholder='<?php echo trans('City'); ?>'>
								</div>
								<div class='col2'>
									<input type='text' class='validate-required' name='zip-code' placeholder='<?php echo trans('Postal/Zip'); ?>'>
								</div>
							</div>
							<div class='two-col'>
								<div class='col1'>
									<input type='datetime' name='date' placeholder='<?php echo trans('Date'); ?>'>
								</div>
								<div class='col2'>
									<input type='text' name='time' placeholder='<?php echo trans('Time'); ?>'>
								</div>
							</div>
							<div class='two-col'>
								<div class='col1'>
									<input type='text' name='purchase-order' placeholder='<?php echo trans('Purchase Order #'); ?>'>
								</div>
								<div class='select-option col2'>
									<select class='validate-required' name='urgent'>
		                                    <option selected='selected' value=''><?php echo trans('Urgency'); ?></option>
		                                    <option value='1'><?php echo trans('Very'); ?></option>
		                                    <option value='2'><?php echo trans('Somewhat'); ?></option>
		                                    <option value='3'><?php echo trans('Not Urgent'); ?></option>
		                                </select>
								</div>

							</div>
							<textarea class='validate-required' name='message' rows='4' placeholder='<?php echo trans('Problem/Request'); ?>'></textarea>
							<input name="myFile" type="file">
							<button type='submit'><?php echo trans('Send Message'); ?></button>
						</form>
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