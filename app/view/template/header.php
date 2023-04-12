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
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700;800&display=swap"
		rel="stylesheet">
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php $this->helpers->analytics(); ?>
	
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="./public/scripts/responsive-menu.js"></script>
</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>


	<!-- <li <?php $this->helpers->isActiveMenu("home"); ?> class="btn"><a  href="home#content">HOME</a></li>
							<!-- <li <?php $this->helpers->isActiveMenu("about"); ?>><a href="about#content">ABOUT US</a></li> -->

	<header>
		<div id="header_container">
			<div class="logo">
			<img src="./public/images/common/main_logo.png" alt="reviews">
			</div>
			<div class="nav_menu">
				<div class="header_info">
					<div class="phone">
						<span class="phone_text">call us at </span>
						<img src="./public/images/common/header_phone.png" alt="#">
						<span class="tel_num"><a href="tel:<?php $this->info("phone"); ?>"><?php $this->info("phone"); ?></a></span>
					</div>
					<div class="soc_med">
						<a href=""><img src="./public/images/icons/facebook.fw.png" alt="#" target="_blank"></a>
						<a href=""><img src="./public/images/icons/instagram.fw.png" alt="#" target="_blank"></a>
						<a href=""><img src="./public/images/icons/location.fw.png" alt="#" target="_blank"></a>
					</div>
				</div>
				<nav>
				<a href="#" id="pull"><strong>MENU</strong></a>
					<ul>
						<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
						<li <?php $this->helpers->isActiveMenu("commercial"); ?>><a href="<?php echo URL ?>commercial#content">COMMERCIAL RENDERINGS</a></li>
						<li <?php $this->helpers->isActiveMenu("residential"); ?>><a href="<?php echo URL ?>residential#content">RESIDENTIAL RENDERINGS</a></li>
						<li <?php $this->helpers->isActiveMenu("interior"); ?>><a href="<?php echo URL ?>interior#content">INTERIOR RENDERINGS</a></li>
						<li <?php $this->helpers->isActiveMenu("floorplan"); ?>><a href="<?php echo URL ?>floorplan#content">FLOORPLAN RENDERINGS</a></li>
						<li <?php $this->helpers->isActiveMenu("permit"); ?>><a href="<?php echo URL ?>permit#content">PERMIT TO BUILD RENDERINGS</a></li>
						<li <?php $this->helpers->isActiveMenu("contractor"); ?>><a href="<?php echo URL ?>contractor#content">CONTRACTOR RENDERINGS</a></li>
						<li <?php $this->helpers->isActiveMenu("virtual"); ?>><a href="<?php echo URL ?>virtual#content">VIRTUAL STAGING</a></li>
					</ul>
				</nav>
				<button class="hamburger">
					<div class="bar"></div>
				</button>
			</div>

			<!-- Hero -->

		</div>
		<?php if ($view == "home"): ?>
			<div id="text_container">
				<div class="logo_hamburger">
				<img src="./public/images/common/main_logo.png" alt="">
				</div>
				<h2>A CREATIVE TEAM OF</h2>
				<h3>Real Estate Renderings Specialists</h3>
				<a class="btn" href="<?php echo URL ?>about">LEARN MORE</a>
			</div>
		<?php endif; ?>
	</header>