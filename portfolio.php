<?php
	include('scripts/language.php');
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Portfolio</title>
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
		<section class="image-bg overlay pt240 pb240 pt-xs-180 pb-xs-180 overlay parallax">
			<div class="background-image-holder">
				<img alt="image" class="background-image cast-shadow" src="img/headers/Portfolio-header.jpg">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="mb32 uppercase bold italic large text-center"><?php echo trans('Our Work'); ?></h1>

					</div>
				</div>

			</div>

		</section>
		<section class="projects pt48 bg-secondary">
			<div class="container">
				<div class="row masonry-loader">
					<div class="col-sm-12 text-center">
						<div class="spinner"></div>
					</div>
				</div>
				<div class="row masonry masonryFlyIn">

					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest2.jpg" data-lightbox="22" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest2.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest3.jpg" data-lightbox="23" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest3.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest4.jpg" data-lightbox="24" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest4.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest5.jpg" data-lightbox="25" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest5.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest7.jpg" data-lightbox="26" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest7.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest8.jpg" data-lightbox="27" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest8.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest9.jpg" data-lightbox="28" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest9.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest10.jpg" data-lightbox="29" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest10.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest11.jpg" data-lightbox="30" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest11.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest12.jpg" data-lightbox="31" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest12.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest13.jpg" data-lightbox="32" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest13.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest14.jpg" data-lightbox="32" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest14.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest15.jpg" data-lightbox="32" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest15.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest16.jpg" data-lightbox="32" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest16.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest17.jpg" data-lightbox="32" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest17.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest18.jpg" data-lightbox="32" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest18.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest19.jpg" data-lightbox="32" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest19.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/sunnycrest/sunnycrest20.jpg" data-lightbox="33" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/sunnycrest/sunnycrest20.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Sunny Crest</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/pathway/pathway-1.jpg" data-lightbox="1" data-title="I THINK THIS IS IT?" description="WATTTTT">
								<img alt="Pic" src="img/projects/pathway/pathway-1-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Path Way</h5>
									<span>Hardscape / Renovation</span>

								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/pathway/pathway-2.jpg" data-lightbox="2">
								<img alt="Pic" src="img/projects/pathway/pathway-2-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Path Way </h5>
									<span>Hardscape / Renovation / Softscape</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/pk/pk-1a.jpg" data-lightbox="3">
								<img alt="Pic" src="img/projects/pk/pk-1a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Park Lane</h5>
									<span>Hardscape / Renovation / Softscape</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/pk/pk-3a.jpg" data-lightbox="4">
								<img alt="Pic" src="img/projects/pk/pk-3a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Park Lane</h5>
									<span>Hardscape / Renovation / Softscape</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/walkway/walk-way.jpg" data-lightbox="5">
								<img alt="Pic" src="img/projects/walkway/walk-way-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Walk Way</h5>
									<span>Hardscape / Renovation / Softscape</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/walkway/walk-way2.jpg" data-lightbox="6">
								<img alt="Pic" src="img/projects/walkway/walk-way2-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Walk Way</h5>
									<span>Hardscape / Renovation / Softscape</span>
								</div>
							</a>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/citrus/citrus-cove-2a.png" data-lightbox="8">
								<img alt="Pic" src="img/projects/citrus/citrus-cove-2a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Citrus Cove Apartments</h5>
									<span>Hardscape / Renovation / Softscape</span>
								</div>
							</a>
							<a class="hidden" href="img/projects/citrus/citrus-cove-2b.png" data-lightbox="8"></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/citrus/citrus-cove-9a.png" data-lightbox="9">
								<img alt="Pic" src="img/projects/citrus/citrus-cove-9a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Citrus Cove Apartments</h5>
									<span>Hardscape / Renovation / Softscape</span>
								</div>
							</a>
							<a class="hidden" href="img/projects/citrus/citrus-cove-9b.png" data-lightbox="9"></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/citrus/citrus-cove-10a.png" data-lightbox="10">
								<img alt="Pic" src="img/projects/citrus/citrus-cove-10a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Citrus Cove Apartments</h5>
									<span>Hardscape / Renovation / Softscape</span>
								</div>
							</a>
							<a class="hidden" href="img/projects/citrus/citrus-cove-10b.png" data-lightbox="10"></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/citrus/citrus-cove-11a.png" data-lightbox="11">
								<img alt="Pic" src="img/projects/citrus/citrus-cove-11a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Citrus Cove Apartments</h5>
									<span>Hardscape / Renovation / Softscape</span>
								</div>
							</a>
							<a class="hidden" href="img/projects/citrus/citrus-cove-11b.png" data-lightbox="11"></a>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/citrus/citrus-cove-25a.png" data-lightbox="12">
								<img alt="Pic" src="img/projects/citrus/citrus-cove-25a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Citrus Cove Apartments</h5>
									<span>Hardscape / Renovation / Softscape</span>
								</div>
							</a>
							<a class="hidden" href="img/projects/citrus/citrus-cove-26a.png" data-lightbox="12"></a>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/green/green-meadow-1a.png" data-lightbox="13">
								<img alt="Pic" src="img/projects/green/green-meadow-1a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Green Meadow Apartments</h5>
									<span>Renovation / Softscape</span>
								</div>
							</a>
							<a class="hidden" href="img/projects/green/green-meadow-1b.png" data-lightbox="13"></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/green/green-meadow-3a.png" data-lightbox="14">
								<img alt="Pic" src="img/projects/green/green-meadow-3a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Green Meadow Apartments</h5>
									<span>Hardscape / Renovation / Softscape</span>
								</div>
							</a>
							<a class="hidden" href="img/projects/green/green-meadow-3b.png" data-lightbox="14"></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/green/green-meadow-4a.png" data-lightbox="15">
								<img alt="Pic" src="img/projects/green/green-meadow-4a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Green Meadow Apartments</h5>
									<span>Hardscape / Renovation / Softscape</span>
								</div>
							</a>
							<a class="hidden" href="img/projects/green/green-meadow-4b.png" data-lightbox="15"></a>
						</div>
					</div>

					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/laguna/laguna-3a.png" data-lightbox="16">
								<img alt="Pic" src="img/projects/laguna/laguna-3a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Laguna Nigel Apartments</h5>
									<span>Hardscape / Renovation</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/laguna/laguna-4a.png" data-lightbox="17">
								<img alt="Pic" src="img/projects/laguna/laguna-4a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Laguna Nigel Apartments</h5>
									<span>Hardscape / Renovation</span>
								</div>
							</a>
							<a class="hidden" href="img/projects/laguna/laguna-1b.png" data-lightbox="17"></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/laguna/laguna-11a.png" data-lightbox="18">
								<img alt="Pic" src="img/projects/laguna/laguna-11a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Laguna Nigel Apartments</h5>
									<span>Hardscape / Renovation</span>
								</div>
							</a>
							<a class="hidden" href="img/projects/laguna/laguna-3b.png" data-lightbox="18"></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/laguna/laguna-1a.png" data-lightbox="19">
								<img alt="Pic" src="img/projects/laguna/laguna-1a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Laguna Nigel Apartments</h5>
									<span>Hardscape / Renovation</span>
								</div>
							</a>
							<a class="hidden" href="img/projects/laguna/laguna-4b.png" data-lightbox="19"></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
						<div class="image-tile inner-title hover-reveal text-center">
							<a href="img/projects/laguna/laguna-6a.png" data-lightbox="20">
								<img alt="Pic" src="img/projects/laguna/laguna-6a-min.jpg">
								<div class="title">
									<h5 class="uppercase mb0">Laguna Nigel Apartments</h5>
									<span>Hardscape / Renovation</span>
								</div>
							</a>
							<a class="hidden" href="img/projects/laguna/laguna-6b.png" data-lightbox="20"></a>
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
	<script src="js/masonry.min.js"></script>
	<script src="js/flexslider.min.js"></script>
	<script src="js/smooth-scroll.min.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/lightbox.min.js"></script>
	<script src="https://cdn.jsdelivr.net/g/respond@1.4.2,html5shiv@3.7.3,selectivizr@1.0.3b"></script>
</body>

</html>