<?php
/*
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl.txt
 * Copyright 2012-2017 Jean-Sebastien Morisset (https://surniaulula.com/)
 */

if ( ! defined( 'ABSPATH' ) ) 
	die( 'These aren\'t the droids you\'re looking for...' );

if ( ! class_exists( 'WpssoSitesubmenuSitesetup' ) && class_exists( 'WpssoSubmenuSetup' ) ) {

	class WpssoSitesubmenuSitesetup extends WpssoSubmenuSetup {
	}
}

?>
