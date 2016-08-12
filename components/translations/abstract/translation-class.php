<?php

abstract class BPCTF_Translations {
    /**
     * The Single instances of the components
     *
     * @var $_instaces
     * @since 1.0.0
     */
    protected static $_instances = null;

    /**
     * Translations
     *
     * @var array
     * @since 1.0.0
     */
    protected $translations = array();

    /**
     * Textdomain
     *
     * @var $textdomain
     * @since 1.0.0
     */
    public $textdomain;

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
            self::$_instances[ $class ]->translations = self::$_instances[ $class ]->translations();
        }

        return self::$_instances[ $class ];
    }

    /**
     * Translating
     *
     * @param string $text
     * @param string $textdomain
     *
     * @return string mixed
     */
    public function translate( $translations, $text, $domain ) {
        if( $domain !== $this->textdomain ) {
            return $translations;
        }

        if ( array_key_exists( $text, $this->translations ) ) {
            return $this->translations[ $text ];
        }

        return $translations;
    }

    /**
     * Initializing Base Hooks for all Components
     */
    private function init_base_hooks() {
        add_filter( 'gettext', array( $this, 'translate' ), 10, 3 );
    }
}

/**
 * Loading Translations
 *
 * @param $translation_class_name
 *
 * @since 1.0.0
 */
function bpftc_load_translation( $translation_class_name ) {
    if ( class_exists( $translation_class_name ) ) {
        $translation_class_name::instance();
    }
}