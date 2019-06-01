<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StanleyWP
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>




<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
	    <!-- <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary"> -->
	    <?php
			// $fixed = (bswp_option('disable_fixed_navbar') == '1' ? 'fixed-top' : 'navbar-static-top');
			// $inverse = (bswp_option('disable_inverse_navbar') == '1' ? 'navbar-inverse' : 'navbar-default');
			$fixed = (stanleywp_option('disable_fixed_navbar') == '1' ? 'fixed-top' : '');
		?>
	    <nav class="navbar <?php echo $fixed; ?> navbar-dark bg-primary navbar-expand-lg">
	    	<div class="container">
				<?php
		    		if ( has_custom_logo() ) {
					    the_custom_logo();
					} else { ?>
					    <div class="navbar-brand mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<?php } ?>

				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
		   		<div class="collapse navbar-collapse" id="navbarNav">
	            <?php
	            $args = array(
	              'theme_location' => 'primary',
	              'depth'      => 2,
	              'container'  => false,
	              'menu_class' => 'navbar-nav ml-auto',
	              'walker'     => new Bootstrap_Walker_Nav_Menu()
	              );
	            if (has_nav_menu('primary')) {
	              wp_nav_menu($args);
	            }
	            ?>
	          </div>

	        </div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
