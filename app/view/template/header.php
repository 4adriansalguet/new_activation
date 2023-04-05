<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php $this->helpers->analytics(); ?>
</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>


	<!-- <li <?php $this->helpers->isActiveMenu("home"); ?> class="btn"><a  href="home#content">HOME</a></li>
							<!-- <li <?php $this->helpers->isActiveMenu("about"); ?>><a href="about#content">ABOUT US</a></li> -->
	<!-- <div class="menu_flex">
						<ul>
							
						</ul>
					</div> -->

	<section id="section_1">
		<header>
			<div id="header_container">
				<div class="header_content">
					<h2>call us at</h2>
					<img src="" alt="">
					<h3>856 - 479 - 8432</h3>
					<span class="header_gap"></span>
					<img src="./public/images/common/soc_med_header.jpg" alt="soc_med">
				</div>
			</div>

			<div id="menu_container">
				<div class="menu_main">
					<div class="menu_content">
						<img src="./public/images/common/main_logo.jpg" alt="logo">
						<nav>
							<ul>
								<li <?php $this->helpers->isActiveMenu("home"); ?> class="btn"><a
										href="home#content">HOME</a></li>
								<li <?php $this->helpers->isActiveMenu("commercial"); ?>><a
										href="commercials#content">COMMERCIAL RENDERINGS</a></li>
								<li <?php $this->helpers->isActiveMenu("residentials"); ?>><a
										href="residentials#content">RESIDENTIAL RENDERINGS</a></li>
								<li <?php $this->helpers->isActiveMenu("interior"); ?>><a
										href="interior#content">INTERIOR RENDERINGS</a></li>
								<li <?php $this->helpers->isActiveMenu("floorplan"); ?>><a
										href="floorplan#content">FLOORPLAN RENDERINGS</a></li>
								<li <?php $this->helpers->isActiveMenu("permit"); ?>><a href="permit#content">PERMIT TO
										BUILD RENDERINGS</a></li>
								<li <?php $this->helpers->isActiveMenu("contractor"); ?>><a
										href="contractor#content">CONTRACTOR RENDERINGS</a></li>
								<li <?php $this->helpers->isActiveMenu("virtual"); ?>><a href="virtual#content">VIRTUAL
										STAGING</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<div id="home_content">
			<div class="title">
				<h4>A CREATIVE TEAM OF</h4>
				<h5>Real Estate Renderings Specialist</h5>
				<a href="#">LEARN MORE</a>
			</div>
		</div>
	</section>

	<!-- Hero -->
	<?php if ($view == "home"): ?>

	<?php endif; ?>