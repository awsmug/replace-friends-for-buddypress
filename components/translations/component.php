<?php
/**
 * ComponentName Core Class TODO
 *
 * This class initializes the component.
 *
 * @author  awesome.ug <support@awesome.ug>, Sven Wagener <sven@awesome.ug>
 * @package Replace_Friends_For_BuddyPress/Admin
 * @version 1.0.0
 * @since   1.0.0
 * @license GPL 2
 *
 * Copyright 2015 (support@awesome.ug)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

if( !defined( 'ABSPATH' ) )
{
	exit;
}

class BPFTC_Translations extends Replace_Friends_For_BuddyPress_Component
{
	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 */
	protected function __construct()
	{
		$this->name = __( 'Translations', 'replace-friends-for-buddyPress' );
		$this->slug = 'translations';
	}

	/**
	 * Initializes the Component.
	 *
	 * @since 1.0.0
	 */
	protected function init()
	{
        require_once ( dirname( __FILE__ ) . '/abstract/translation-class.php' );
        require_once ( dirname( __FILE__ ) . '/buddypress.php' );
        require_once ( dirname( __FILE__ ) . '/buddyboss-wall.php' );
	}
}

bpftc_load_component( 'BPFTC_Translations' );
