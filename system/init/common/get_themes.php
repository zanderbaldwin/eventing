<?php

/**
 * Common function
 *
 * @category	Eventing
 * @package		Common
 * @subpackage	GetThemes
 * @see			/index.php
 */

	if(!function_exists('get_themes')) {
		/**
		 * Get Themes
		 *
		 * Returns an array of folders that are inside the themes directory.
		 *
		 * @access public
		 * @return array
		 */
		function get_themes() {
			static $themes = false;
			if(is_array($themes)) {
				return $themes;
			}
			$path = theme_path();
			if(!is_string($path)) {
				return array();
			}
			$handler = opendir($path);
			while($file = readdir($handler)) {
				if($file != '.' && $file != '..' && is_dir($path . $file)) {
					$themes[] = $file;
				}
			}
			return $themes;
		}
	}