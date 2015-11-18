<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if($_POST['contact_submit']){

	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_phone = $_POST['contact_phone'];
	$contact_message = $_POST['contact_message'];
	$contact_verify = rand();

	contact(
		$contact_verify, 
		$contact_name, 
		$contact_email, 
		$contact_phone, 
		$contact_message
	);

} ?>

<?php if($_POST['dealer_submit']){

	$dealer_dealership = $_POST['dealer_dealership'];
	$dealer_rep = $_POST['dealer_rep'];
	$dealer_website = $_POST['dealer_website'];
	$dealer_email = $_POST['dealer_email'];
	$dealer_phone = $_POST['dealer_phone'];
	$dealer_years = $_POST['dealer_years'];
	$dealer_showroom = $_POST['dealer_showroom'];
	$dealer_message = $_POST['dealer_message'];

	dealer(
		$dealer_dealership,
		$dealer_rep,
		$dealer_website,
		$dealer_email,
		$dealer_phone,
		$dealer_years,
		$dealer_showroom,
		$dealer_message
	);

} ?>

<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
            <a alt="Pavati Aluminum Wake Boats" class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>

		<div class="mobile-toggle"><i class="icon-reorder"></i>Menu</div>

		<div class="addthis_toolbox addthis_32x32_style addthis_default_style">
			<a class="addthis_button_facebook_follow" addthis:userid="PavatiWakeboardingBoats"></a>
			<a class="addthis_button_twitter_follow" addthis:userid="PavatiWakeboard"></a>
		</div>

		</nav><!-- #site-navigation -->

		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>

	</header><!-- #masthead -->

	<div class="drop-menu">
		<div class="container">
			<ul class="boat-models">
				<li><a><img src="http://pavati.com/wake/wp-content/uploads/2014/02/al-21.png" /><h1>AL-21</h1><span>Coming Soon</span></a></li>
				<li><a><img src="http://pavati.com/wake/wp-content/uploads/2014/02/al-22.png" /><h1>AL-22</h1><span>Coming Soon</span></a></li>
				<li><a href="http://pavati.com/wake/al-24"><img src="http://pavati.com/wake/wp-content/uploads/2014/02/al-24.png" /><h1>AL-24</h1></a></li>
				<li><a><img src="http://pavati.com/wake/wp-content/uploads/2014/02/al-26.png" /><h1>AL-26</h1><span>Coming Soon</span></a></li>
			</ul>
		</div>
	</div>

	<div class="mobile-menu">
		<a href="http://pavati.com/wake/">Home</a>
		<a href="http://pavati.com/wake/al-24">AL-24 Series</a>
		<a href="http://pavati.com/wake/dealer-locator">Dealer Locator</a>
		<a href="http://pavati.com/wake/about-pavati">About Pavati</a>
	</div>

	<div id="main" class="wrapper">