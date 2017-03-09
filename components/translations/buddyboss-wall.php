<?php
/**
 * Class BPFTC_Translate_BuddyPress
 * Translating strings without touching original translation files
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class BPFTC_Translate_BuddyBoss_Wall extends BPCTF_Translations {

	/**
	 * Initializing
	 *
	 * @since 1.0.0
	 */
	protected function __construct() {
		$this->name       = __( 'BuddyBoss Wall Translations', 'replace-friends-for-buddyPress' );
		$this->textdomain = 'buddyboss-wall';
	}

	/**
	 * Loading translations
	 *
	 * @since 1.0.0
	 */
	public function translations() {
		$translations[ 'gettext' ] = array(
			'You and %s are not friends. Request friendship to post to their Wall.' => __( 'You and %s are not in contact. Request contact to post to their Wall.', 'replace-friends-for-buddyPress' ),
		);

		return $translations;
	}
}

bpftc_load_translation( 'BPFTC_Translate_BuddyBoss_Wall' );

