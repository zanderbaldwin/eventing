<?php

/**
 * Common function
 *
 * @category	Eventing
 * @package		Common
 * @subpackage	Copyright
 * @see			/index.php
 */

	if(!function_exists('copyright')) {
		/**
		 * Copyright Notice
		 *
		 * Echo out a copyright notice, which automatically updates the copyright
		 * years.
		 *
		 * @access public
		 * @param string $holder
		 * @param integer $since
		 * @return string
		 */
		function copyright($holder = 'Copyright Holder', $since = false) {
			$since = is_numeric($since) ? (int) $since : (int) strftime('%Y');
			$year = (int) strftime('%Y');
			$year = $year > $since ? '-'.$year : '';
			return 'Copyright &#169; ' . $holder . ' ' . $since . $year;
		}
	}