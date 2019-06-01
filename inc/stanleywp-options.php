<?php
/**
 * @package stanleywp
 */

if (!function_exists('stanleywp_option')) {
	function stanleywp_option ($id, $fallback= false, $param = false) {
		global $stanleywp_options;
		if ($fallback = false) $fallback = '';
		$output = ( isset($stanleywp_options[$id]) && $stanleywp_options[$id] !== '') ? $stanleywp_options[$id] :$fallback ;
		if (!empty($stanleywp_options[$id]) && $param) {
			$output = $stanleywp_options[$id][param];
		}
		return $output;
	}
}
