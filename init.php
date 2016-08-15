<?php
/**
 * Plugin Name: Replace friends for BuddyPress
 * Plugin URI: http://www.awesome.ug
 * Description: Change all textstrings in BuddyPress from "friends" to "contacts".
 * Version: 1.0.0
 * Author: awesome.ug
 * Author URI: http://www.awesome.ug
 * Author Email: support@awesome.ug
 * License: GPL 2
 * Copyright 2015 (support@awesome.ug)
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/**
 * Replace_Friends_For_BuddyPress initializing class
 *
 * @author  awesome.ug, Author <support@awesome.ug>
 * @package Replace_Friends_For_BuddyPress
 * @version 1.0.0
 * @since   1.0.0
 * @license GPL 2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Replace_Friends_For_BuddyPress {
    /**
     * Notices for screening in admin_notices
     *
     * @var $notices
     */
    static $notices = array();

    /**
     * Doing the singleton
     *
     * @var $_instance
     */
    protected static $_instance = null;

    /**
     * @var Notices for screening in Admin
     */
    private $passed_requirements = false;

    /**
     * Construct
     */
    private function __construct() {
        self::constants();
        self::includes();
        self::load_components();
        self::load_textdomain();

        add_action( 'plugins_loaded', array( $this, 'check_requirements' ) );
        add_action( 'plugins_loaded', array( $this, 'load_components' ) );

        if ( is_admin() ) {
            add_action( 'admin_notices', array( $this, 'show_admin_notices' ) );
        }
    }

    /**
     * Defining Constants for Use in Plugin
     *
     * @since 1.0.0
     */
    public static function constants() {
        define( 'BPFTC_FOLDER', plugin_dir_path( __FILE__ ) );
        define( 'BPFTC_RELATIVE_FOLDER', substr( BPFTC_FOLDER, strlen( WP_PLUGIN_DIR ), strlen( BPFTC_FOLDER ) ) );
        define( 'BPFTC_URLPATH', plugin_dir_url( __FILE__ ) );
        define( 'BPFTC_COMPONENTFOLDER', BPFTC_FOLDER . '/components' );
    }

    /**
     * Getting include files
     *
     * @since 1.0.0
     */
    public static function includes() {
        require_once( BPFTC_FOLDER . '/functions.php' );
    }

    /**
     * Loading components
     *
     * @since 1.0.0
     */
    public function load_components() {
        if ( ! $this->passed_requirements ) {
            return;
        }

        require_once( BPFTC_FOLDER . '/components/component.php' );
        require_once( BPFTC_FOLDER . '/components/translations/component.php' );
    }

    /**
     * Loads the plugin text domain for translation.
     *
     * @since 1.0.0
     */
    public static function load_textdomain() {
        load_plugin_textdomain( 'replace-friends-for-buddyPress', false, BPFTC_RELATIVE_FOLDER . '/languages' );
    }

    /**
     * Main Instance
     */
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    /**
     * Registers and enqueues admin-specific styles.
     *
     * @since 1.0.0
     * @todo  Change 'plugin-name' to the name of your plugin
     */
    public static function admin_styles() {
        wp_enqueue_style( 'bpftc-admin-styles', BPFTC_URLPATH . 'includes/css/admin.css' );
    }

    /**
     * Registers and enqueues admin-specific JavaScript.
     *
     * @since 1.0.0
     * @todo  Change 'plugin-name' to the name of your plugin
     */
    public static function admin_scripts() {
        wp_enqueue_script( 'bpftc-admin-script', BPFTC_URLPATH . 'includes/js/admin.js' );
    }

    /**
     * Adds a notice to
     *
     * @param        $message
     * @param string $type
     *
     * @todo Rename Replace_Friends_For_BuddyPress
     */
    public static function admin_notice( $message, $type = 'updated' ) {
        self::$notices[] = array(
            'message' => '<b>Replace_Friends_For_BuddyPress</b>: ' . $message,
            'type'    => $type
        );
    }

    /**
     * Checking Requirements and adding Error Messages.
     *
     * @since 1.0.0
     */
    public function check_requirements() {
        $passed = true;

        if( ! function_exists( 'buddypress' ) )
        {
            self::admin_notice( __( 'BuddyPress have to be installed.', 'replace-friends-for-buddyPress' ), 'error' );
            $passed = FALSE;
        }

        $this->passed_requirements = $passed;

        return $passed;
    }

    /**
     * Show Notices in Admin
     */
    public function show_admin_notices() {
        if ( is_array( self::$notices ) && count( self::$notices ) > 0 ) {
            $html = '';
            foreach ( self::$notices AS $notice ) {
                $message = $notice[ 'message' ];
                $html .= '<div class="' . $notice[ 'type' ] . '"><p>' . $message . '</p></div>';
            }
            echo $html;
        }
    }

}

Replace_Friends_For_BuddyPress::instance();