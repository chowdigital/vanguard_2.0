<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cloudsdale_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lightslider.js"></script> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text"  href="#primary"><?php esc_html_e( 'Skip to content', 'cloudsdale-master' ); ?></a>

	

	<header id="masthead" class="site-header">

 <nav id="site-navigation" class="main-navigation">
		<div id="navBox" class="cm-nav shadow">
				<div class="container cm-nav-inner">
					<a id="menuIcon" class="menu-toggle " aria-controls="primary-menu" aria-expanded="false" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
					<div class="menu-icon shadow"></div>
				</a>
					<a id="navBrand" class="navbar-brand shadow" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img id="navImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/vanguard-logo-text.svg" alt="Vanguard Logo" style>
					</a>
					<div id="soIcons" class="social-icons">
						<a class="instagram-icon shadow" target="_blank" href="https://www.instagram.com/vanguardtheatrecamden"></a>
						<a class="twitter-icon shadow"  target="_blank" href="https://twitter.com/vanguardcamden"></a>
						<a class="facebook-icon shadow"  target="_blank" href="https://www.facebook.com/vanguardcamden"></a>
					</div>
				</div>
			</div>
			<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasNav" aria-labelledby="offcanvasNavLabel">
				<div class="offcanvas-header">
				<a  href="<?php echo esc_url( home_url( '/' ) ); ?>">	
				<img id="navImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/vanguard-logo-text.svg" alt="Vanguard Logo" style="height:40px;">
</a>
					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'      => false,
							'menu_class'     => 'navbar-nav',
						)
					);
					?>
				</div>
				<div class="offcanvas-footer">
				<ul>
					<li>
					<a href="mailto:info@vanguardcamden.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mail.svg"></img>info@vanguardcamden.com</a>
					</li>
					<li>
					<a href="tel:02080929044"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg"></img>020 8092 9044</a>
					</li>
					<li>
					<a href="https://what3words.com/Cycle.Waters.Patch"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/map.svg"></img>What Three Words: Cycle, Waters, Patch</a>
					</li>
					
					</ul>
				</div>
			</div>
		</nav> 
	</header><!-- #masthead 
	<div class="coming-soon">
		<div class="view full-page-intro" style="background-image:  url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
			<div class="center-home text-center container">
				<div class="">
					<div class="homepage-box p-1 mb-3">
						<h1>The Vanguard Theatre<br> Coming Soon</h1>
					</div>
						<a href="https://www.tutti.space/immersiveldn/the-vanguard-theatre/the-warehouse"><button  type="button" class="btn btn-white">View on Tutti Space</button></a>
				</div>   
			</div>
		</div>
	</div>
		-->