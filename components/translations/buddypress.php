<?php
/**
 * Class Aspen_Translate_Plugins
 * Translating strings without touching original translation files
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class BPFTC_Translate_BuddyPress extends BPCTF_Translations {

    /**
     * Initializing
     *
     * @since 1.0.0
     */
    protected function __construct() {
        $this->name       = __( 'BuddyPress Translations', '' );
        $this->textdomain = 'buddypress';
    }

    /**
     * Loading translations
     *
     * @since 1.0.0
     */
    public function translations() {
        $translations = array(
            ' Friendship could not be requested.'  => __( ' Contact could not be requested.', 'aspen' ),
            'Add Friend'                           => __( 'Add Contact', 'aspen' ),
            'Cancel Friendship Request'            => __( 'Cancel Contact Request', 'aspen' ),
            'Friends'                              => __( 'Contacts', 'aspen' ),
            'Friends %s'                           => __( 'Contacts %s', 'aspen' ),
            'Friends <span class=\"%s\">%s</span>' => __( 'Contacts <span class=\"%s\">%s</span>', 'aspen' ),
            'Friendships'                          => __( 'Relationships', 'aspen' ),
            'My Friends'                           => __( 'My Contacts', 'aspen' ),
            'My Friends %s'                        => __( 'My Contacts %s', 'aspen' ),
            'My Friends <span>%s</span>'           => __( 'My Contacts <span>%s</span>', 'aspen' ),
            'Search Friends...'                    => __( 'Search Contacts...', 'aspen' ),
            '%d friends'                           => __( '%d Contacts', 'aspen' ),
            '%s\'s Friends'                        => __( '%s\'s Friends', 'aspen' ),
            '%d friend'                            => __( '%d Contact', 'aspen' ),
            '%s\'s Friends'                        => __( '%s\'s Contacts', 'aspen' ),
        );

        return $translations;
    }
}

bpftc_load_translation( 'BPFTC_Translate_BuddyPress' );

