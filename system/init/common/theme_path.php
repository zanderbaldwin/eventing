<?php

/**
 * Common function
 *
 * @category	Eventing
 * @package		Common
 * @subpackage	ThemePath
 * @see			/index.php
 */

	if(!function_exists('theme_path')) {
		/**
		 * Theme Path
		 *
		 * Specify a theme and will return the absolute path to the theme directory.
		 * Will return false if the theme directory does not exist.
		 *
		 * @access public
		 * @param string $theme
		 * @return string|false
		 */
		function theme_path($theme = true) {
			if($theme === true) {
				$theme = '';
			}
			if(!is_string($theme)) {
				return false;
			}
			$path = realpath(APP . 'themes/' . $theme);
			return is_string($path) ? $path . '/' : false;
		}
	}