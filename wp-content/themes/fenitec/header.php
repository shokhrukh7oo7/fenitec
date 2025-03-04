<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fenitec
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--  -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11492410889"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'AW-11492410889');
	</script>
	<!--  -->
	<?php wp_body_open(); ?>
	<header class="header-three header--sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="header-three-wrapper">
						<div class="logo-area">
							<a href="<?php echo esc_url(home_url('/')); ?>" class="thumbnail">
								<img src="<?= the_field('header_logo_w', 'option') ?>" alt="logo-area">
							</a>
							<a href="<?php echo esc_url(home_url('/')); ?>" class="thumbnail-2">
								<img src="<?= the_field('header_logo_b', 'option') ?>" alt="logo-area">
							</a>
						</div>

						<div class="main-nav-desk nav-area">
							<nav class="my-custom-class">
								<?php
								wp_nav_menu([
									'theme_location' => 'header_menu',
									'menu_class' => 'primary-menu',
									'container' => 'ul',
								]);
								?>
							</nav>
						</div>

						<div class="rts-button-area">
							<div class="header-phone-wrapper">
								<a href="tel:<?= the_field('phone_number_link', 'option') ?>" class="number">
									<?= the_field('phone_number', 'option') ?>
								</a>
							</div>

							<div class="menu-area" id="menu-btn">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
									fill="none">
									<rect width="18" height="2" fill="#0C0A0A"></rect>
									<rect y="7" width="18" height="2" fill="#0C0A0A"></rect>
									<rect y="14" width="18" height="2" fill="#0C0A0A"></rect>
								</svg>
							</div>
						</div>

						<!-- nav-area end -->
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- rts header three end -->
	<div id="side-bar" class="side-bar header-three">
		<button class="close-icon-menu"><i class="uil-multiply"></i></button>
		<div class="mobile-menu d-block d-xl-none">
			<nav class="my-custom-class">
				<?php
				wp_nav_menu([
					'theme_location' => 'header_menu',
					'menu_class' => 'primary-menu mobile-menu-active',
					'container' => 'ul',
					'container_id' => 'mainmenu',
					'container_class' => 'mobile-menu-active',
				]);
				?>
			</nav>
		</div>
		<!-- mobile menu area end -->
	</div>
	<!-- header style two End -->