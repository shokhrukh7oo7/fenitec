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
								<img src="<?= get_template_directory_uri(). "/assets/images/logo.svg"?>" alt="logo-area">
							</a>
							<a href="<?php echo esc_url(home_url('/')); ?>" class="thumbnail-2">
								<img src="<?= get_template_directory_uri(). "/assets/images/logo_b.svg"?>" alt="logo-area">
							</a>
						</div>

						<div class="main-nav-desk nav-area">
							<nav class="my-custom-class">
								<a class="primary-menu">
									<li class="menu-item"><a href="#">Главная</a></li>
									<li class="menu-item"><a href="#">О компании</a></li>
									<li class="menu-item"><a href="#">Продукты</a></li>
									<li class="menu-item"><a href="#">Качество</a></li>
									<li class="menu-item"><a href="#">Контакты</a></li>
								</a>
							</nav>
							<!-- <?php
							wp_nav_menu(
								array(
									'theme_location' => 'main',
									'menu_id' => 'primary-menu',
								)
							);
							?> -->
						</div>

						<div class="rts-button-area">
							<!-- 						   <?php if (function_exists('pll_the_languages')): ?>
								<div class="language-dropdown">
									<button class="dropdown-toggle">
										<?php echo pll_current_language('name'); ?>
									</button>
									<ul class="language-switcher">
										<?php pll_the_languages(array('show_flags' => 0, 'show_names' => 1)); ?>
									</ul>
								</div>
							<?php endif; ?> -->
							<div class="header-phone-wrapper">
								<a href="tel:+903229988" class="number">
									+998 (90) 322-99-88
								</a>
							</div>
							<!-- 							<?php if (function_exists('pll_the_languages')): ?>
								<ul class="language-switcher">
									<?php pll_the_languages(array('show_flags' => 0, 'show_names' => 1)); ?>
								</ul>
						<div class="header-phone-wrapper">
							<a href="tel:+903229988" class="number" >
								+998 (90) 322-99-88
							</a>
						</div>
							<?php endif; ?> -->
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
				<ul class="mainmenu" id="mobile-menu-active">
					<li class="menu-item"><a href="#"></a>Главная</li>
					<li class="menu-item"><a href="#"></a>О компании</li>
					<li class="menu-item"><a href="#"></a>Продукты</li>
					<li class="menu-item"><a href="#"></a>Качество</li>
					<li class="menu-item"><a href="#"></a>Контакты</li>
				</ul>
			</nav>
			<!-- <?php
			wp_nav_menu([
				'theme_location' => '',
				'menu' => '',
				'container' => 'nav',
				'container_class' => 'nav-main mainmenu-nav mt--30',
				'container_id' => '',
				'menu_class' => 'menu',
				'menu_id' => '',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'items_wrap' => '<ul class="mainmenu" id="mobile-menu-active">%3$s</ul>',
				'depth' => 0,
				'walker' => '',
			]);
			?> -->
		</div>
		<!-- mobile menu area end -->
	</div>
	<!-- header style two End -->