<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Client_Theme
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
	<?php
   	if (function_exists('is_tag') && is_tag()) {
   		single_tag_title("Tag Archive for &quot;"); echo '&quot; - ';}
   		elseif (is_archive()) {
   			wp_title(''); echo ' Archive - '; }
   		elseif (is_search()) {
   			echo 'Search for &quot;' . wp_specialchars($s) . '&quot; - '; }
   		elseif (!(is_404()) && (is_single()) || (is_page()) && (!is_front_page())) { 
   			wp_title(''); echo ' - '; }
   		elseif (is_404()) {
   			echo 'Not Found - '; }
   		if (is_home()) { 
   			bloginfo('name'); echo ' - '; bloginfo('description'); }
   		else {
   			bloginfo('name'); } 
   		if ($paged>1) { echo ' - page ' . $paged; }
   	?>
</title>

<!-- Short description of the page (limit to 150 characters) -->
<meta name="description" content="<?php bloginfo('description'); ?>">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<!-- <link rel="icon" href="img/favicon-16.png" sizes="16x16" type="image/png"> -->
<!-- <link rel="icon" href="img/favicon-32.png" sizes="32x32" type="image/png"> -->
<!-- <link rel="icon" href="img/favicon-48.png" sizes="48x48" type="image/png"> -->
<!-- <link rel="icon" href="img/favicon-62.png" sizes="62x62" type="image/png"> -->
<!-- <link rel="icon" href="img/favicon-192.png" sizes="192x192" type="image/png"> -->
<!-- More info: https://bitsofco.de/all-about-favicons-and-touch-icons/ -->

<meta property="fb:app_id" content="123456789">
<meta property="og:url" content="https://example.com/page.html">
<meta property="og:type" content="website">
<meta property="og:title" content="Content Title">
<meta property="og:image" content="https://example.com/image.jpg">
<meta property="og:description" content="Description Here">
<meta property="og:site_name" content="Site Name">
<meta property="og:locale" content="en_US">
<meta property="article:author" content="">
<!-- Facebook: https://developers.facebook.com/docs/sharing/webmasters#markup -->
<!-- Open Graph: http://ogp.me/ -->

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@site_account">
<meta name="twitter:creator" content="@individual_account">
<meta name="twitter:url" content="https://example.com/page.html">
<meta name="twitter:title" content="Content Title">
<meta name="twitter:description" content="Content description less than 200 characters">
<meta name="twitter:image" content="https://example.com/image.jpg">
<!-- More info: https://dev.twitter.com/cards/getting-started -->
<!-- Validate: https://dev.twitter.com/docs/cards/validation/validator -->

<link href="https://plus.google.com/+YourPage" rel="publisher">
<meta itemprop="name" content="Content Title">
<meta itemprop="description" content="Content description less than 200 characters">
<meta itemprop="image" content="https://example.com/image.jpg">

<!-- Disable automatic detection and formatting of possible phone numbers -->
<meta name="format-detection" content="telephone=no">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 9]>
  	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'client-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'client-theme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
