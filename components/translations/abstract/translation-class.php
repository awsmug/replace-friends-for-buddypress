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
     * Translate
     *
     * @param string $translation
     * @param string $text
     * @param string $textdomain
     *
     * @return string $translation
     *
     * @since 1.0.0
     */
    public function translate( $translation, $text, $domain ) {
        if( $domain !== $this->textdomain ) {
            return $translation;
        }

        if ( ! array_key_exists( $text, $this->translations[ 'gettext' ] ) ) {
	        return $translation;
        }

	    return $this->translations[ 'gettext' ][ $text ];

    }

	/**
	 * Translate with context
	 *
	 * @param string $translation
	 * @param string $text
	 * @param string $context
	 * @param string $domain
	 *
	 * @return string $translation
	 *
	 * @since 1.0.0
	 */
    public function translate_with_context( $translation, $text, $context, $domain ) {
	    if( $domain !== $this->textdomain ) {
		    return $translation;
	    }

	    if ( ! array_key_exists( $context, $this->translations ) ) {
		    return $translation;
	    }
	    FB::log( '====================' );

	    FB::log( $text );
	    FB::log( $context );

	    if ( ! array_key_exists( $text, $this->translations[ $context ] ) ) {
		    return $translation;
	    }

	    FB::log( $this->translations[ $context ][ $text ] );


	    return $this->translations[ $context ][ $text ];
    }

    /**
     * Initializing Base Hooks for all Components
     *
     * @since 1.0.0
     */
    private function init_base_hooks() {
        add_filter( 'gettext', array( $this, 'translate' ), 10, 3 );
        add_filter( 'gettext_with_context', array( $this, 'translate_with_context' ), 10, 4 );
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