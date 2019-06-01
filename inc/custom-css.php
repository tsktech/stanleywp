<?php
/**
 * Adds custom CSS to the wp_head() hook.
 *
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */


if ( !function_exists( 'stanleywp_custom_css' ) ) {

	add_action('wp_head', 'stanleywp_custom_css');
	function stanleywp_custom_css() {

			$custom_css ='';

			if(stanleywp_option('disable_fixed_navbar') == '1') {
				$custom_css .= 'body { padding-top: 120px; }
				body.admin-bar .navbar {position:fixed; top: 28px; z-index: 1000; max-height: 30px;}';
			}

			/*$custom_css .= 'body { padding-top: 70px; }
				body.admin-bar .navbar {position:fixed; top: 28px; z-index: 1000; height: 40px;}';*/
			// padding-top: 70px;
			//trim white space for faster page loading
			$custom_css_trimmed =  preg_replace( '/\s+/', ' ', $custom_css );

			//echo css
			$css_output = "<!-- Custom CSS -->\n<style type=\"text/css\">\n" . $custom_css_trimmed . "\n</style>";

			if(!empty($custom_css)) {
				echo $css_output;
			}
	}

}
