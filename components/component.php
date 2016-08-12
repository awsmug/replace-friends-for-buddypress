<?php
/**
 * BuddyPress_Friends_To_Contacts_Component Class
 * Mother of all Components
 *
 * @author  awesome.ug <very@awesome.ug>, Sven Wagener <sven@awesome.ug>
 * @package BuddyPress_Friends_To_Contacts
 * @version 1.0.0
 * @since   1.0.0
 * @license GPL 2
 *          Copyright 2015 awesome.ug (very@awesome.ug)
 *          This program is free software; you can redistribute it and/or modify
 *          it under the terms of the GNU General Public License, version 2, as
 *          published by the Free Software Foundation.
 *          This program is distributed in the hope that it will be useful,
 *          but WITHOUT ANY WARRANTY; without even the implied warranty of
 *          MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *          GNU General Public License for more details.
 *          You should have received a copy of the GNU General Public License
 *          along with this program; if not, write to the Free Software
 *          Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

abstract class BuddyPress_Friends_To_Contacts_Component {

    /**
     * The Single instances of the components
     *
     * @var $_instaces
     * @since 1.0.0
     */
    protected static $_instances = null;

    /**
     * Name of Component
     *
     * @var $name
     * @since 1.0.0
     */
    var $name;

    /**
     * Slug of Component
     *
     * @var $slug
     * @since 1.0.0
     */

    var $slug;

    /**
     * Is Component active?
     *
     * @var $active
     * @since 1.0.0
     */

    var $active = true;

    /**
     * Main Instance
     *
     * @since 1.0.0
     */
    public static function instance() {
        $class = get_called_class();
        if ( ! isset( self::$_instances[ $class ] ) ) {
            self::$_instances[ $class ] = new $class();
            self::$_instances[ $class ]->init_base_hooks();

            add_action( 'plugins_loaded', array( self::$_instances[ $class ], 'check_and_start' ), 20 );
        }

        return self::$_instances[ $class ];
    }

    /**
     * Checking and starting
     *
     * @since 1.0.0
     */
    public function check_and_start() {
        $class = get_called_class();
        if ( true == self::$_instances[ $class ]->check_requirements() ) {
            self::$_instances[ $class ]->base_init();
        }
    }

    /**
     * Function for Checks
     *
     * @return mixed
     * @since 1.0.0
     */
    protected function check_requirements() {
        return true;
    }

    /**
     * Adds a notice to
     *
     * @param        $message
     * @param string $type
     */
    protected function admin_notice( $message, $type = 'updated' ) {
        if ( WP_DEBUG ) {
            $message = $message . ' (in Module "' . $this->name . '")';
        }
        BuddyPress_Friends_To_Contacts::admin_notice( $message, $type );
    }

    /**
     * Running Scripts if functions are existing in child Class
     *
     * @since 1.0.0
     */
    private function base_init() {
        if ( method_exists( $this, 'includes' ) ) {
            $this->includes();
        }

        if ( method_exists( $this, 'init' ) ) {
            $this->init();
        }

        // Scriptloaders

        if ( is_admin() ) {
            if ( method_exists( $this, 'admin_styles' ) ) {
                add_action( 'admin_print_styles', array( $this, 'admin_styles' ) );
            }

            if ( method_exists( $this, 'admin_scripts' ) ) {
                add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
            }
        } else {

            if ( method_exists( $this, 'frontend_styles' ) ) {
                add_action( 'wp_enqueue_scripts', array( $this, 'frontend_styles' ) );
            }

            if ( method_exists( $this, 'frontend_scripts' ) ) {
                add_action( 'wp_enqueue_scripts', array( $this, 'frontend_scripts' ) );
            }
        }
    }

    /**
     * Initializing Base Hooks for all Components
     */
    private function init_base_hooks() {
    }
}

/**
 * Loading Components for Plugin
 *
 * @param $component_class_name
 *
 * @since 1.0.0
 */
function bpftc_load_component( $component_class_name ) {
    if ( class_exists( $component_class_name ) ) {
        global $bpftc_global;
        $component = $component_class_name::instance();
        $bpftc_global[ 'components' ][ $component->slug ] = $component;
    }
}
