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
		$translations[ 'gettext' ] = array(
			' Friendship could not be requested.'                                                                                                     => __( ' Contact could not be requested.', 'buddypress-friends-to-contacts' ),
			'Activity feed for %s\'s friends.'                                                                                                        => __( 'Activity feed for %s\'s contacts.', 'buddypress-friends-to-contacts' ),
			'A member accepts your friendship request'                                                                                                => __( 'A member accepts your contact request', 'buddypress-friends-to-contacts' ),
			'A member has sent a friend request to the recipient.'                                                                                    => __( 'A member has sent a contact request to the recipient.', 'buddypress-friends-to-contacts' ),
			'A member sends you a friendship request'                                                                                                 => __( 'A member sends you a contact request', 'buddypress-friends-to-contacts' ),
			'Add Friend'                                                                                                                              => __( 'Add Contact', 'buddypress-friends-to-contacts' ),
			'All of your friends already belong to this group.'                                                                                       => __( 'All of your contacts already belong to this group.', 'buddypress-friends-to-contacts' ),
			'Cancel Friendship Request'                                                                                                               => __( 'Cancel Contact Request', 'buddypress-friends-to-contacts' ),
			'Counting the number of friends for each user&hellip; %s'                                                                                 => __( 'Counting the number of contacts for each user&hellip; %s', 'buddypress-friends-to-contacts' ),
			'Default friends to show:'                                                                                                                => __( 'Default contacts to show:', 'buddypress-friends-to-contacts' ),
			'Friends'                                                                                                                                 => __( 'Contacts', 'buddypress-friends-to-contacts' ),
			'Friends %s'                                                                                                                              => __( 'Contacts %s', 'buddypress-friends-to-contacts' ),
			'Friends <span class=\"%s\">%s</span>'                                                                                                    => __( 'Contacts <span class=\"%s\">%s</span>', 'buddypress-friends-to-contacts' ),
			'Friendships'                                                                                                                             => __( 'Relationships', 'buddypress-friends-to-contacts' ),
			'Group invitations can only be extended to friends.'                                                                                      => __( 'Group invitations can only be extended to contacts.', 'buddypress-friends-to-contacts' ),
			'Max friends to show:'                                                                                                                    => __( 'Max contacts to show:', 'buddypress-friends-to-contacts' ),
			'My Friends'                                                                                                                              => __( 'My Contacts', 'buddypress-friends-to-contacts' ),
			'My Friends %s'                                                                                                                           => __( 'My Contacts %s', 'buddypress-friends-to-contacts' ),
			'My Friends <span>%s</span>'                                                                                                              => __( 'My Contacts <span>%s</span>', 'buddypress-friends-to-contacts' ),
			'New friendship created'                                                                                                                  => __( 'New relationship created', 'buddypress-friends-to-contacts' ),
			'New friendships'                                                                                                                         => __( 'New relationship', 'buddypress-friends-to-contacts' ),
			'Once you\'ve made some friendships, you\'ll be able to invite those members to this group.'                                              => __( 'Once you\'ve made some contacts, you\'ll be able to invite those members to this group.', 'buddypress-friends-to-contacts' ),
			'Once you have built up friend connections you will be able to invite others to your group.'                                              => __( 'Once you have built up contact connections you will be able to invite others to your group.', 'buddypress-friends-to-contacts' ),
			'Recipient has had a friend request accepted by a member.'                                                                                => __( 'Recipient has had a contact request accepted by a member.', 'buddypress-friends-to-contacts' ),
			'Repair total friends count for each member.'                                                                                             => __( 'Repair total contact count for each member.', 'buddypress-friends-to-contacts' ),
			'Search Friends...'                                                                                                                       => __( 'Search Contacts...', 'buddypress-friends-to-contacts' ),
			'Select friends to invite.'                                                                                                               => __( 'Select contacts to invite.', 'buddypress-friends-to-contacts' ),
			'Select people to invite from your friends list.'                                                                                         => __( 'Select people to invite from your contacts list.', 'buddypress-friends-to-contacts' ),
			'The activity of my friends only.'                                                                                                        => __( 'The activity of my contacts only.', 'buddypress-friends-to-contacts' ),
			'Viewing 1 member with friends'                                                                                                           => __( 'Viewing 1 member with contacts', 'buddypress-friends-to-contacts' ),
			'Viewing %1$s - %2$s of %3$s member with friends'                                                                                         => __( 'Viewing %1$s - %2$s of %3$s member with contacts', 'buddypress-friends-to-contacts' ),
			'Viewing %1$s - %2$s of %3$s members with friends'                                                                                        => __( 'Viewing %1$s - %2$s of %3$s members with contacts', 'buddypress-friends-to-contacts' ),
			'You are already friends with this user'                                                                                                  => __( 'You are already in contact with this user', 'buddypress-friends-to-contacts' ),
			'You already have a pending friendship request with this user'                                                                            => __( 'You already have a pending contact request with this user', 'buddypress-friends-to-contacts' ),
			'You are not yet friends with this user'                                                                                                  => __( 'You are not yet in contact with this user', 'buddypress-friends-to-contacts' ),
			'You have a friendship request from %s'                                                                                                   => __( 'You have a contact request from %s', 'buddypress-friends-to-contacts' ),
			'You have a pending friendship request with this user'                                                                                    => __( 'You have a pending contact request with this user', 'buddypress-friends-to-contacts' ),
			'You have no pending friendship requests.'                                                                                                => __( 'You have no pending friendship requests.', 'buddypress-friends-to-contacts' ),
			'You have %d pending friendship requests'                                                                                                 => __( 'You have %d pending friendship requests', 'buddypress-friends-to-contacts' ),
			'You haven\'t added any friend connections yet.'                                                                                          => __( 'You haven\'t added any contact connections yet.', 'buddypress-friends-to-contacts' ),
			'%1$s and %2$s are now friends'                                                                                                           => __( '%1$s and %2$s are now contacts', 'buddypress-friends-to-contacts' ),
			'%d friend'                                                                                                                               => __( '%d Contact', 'buddypress-friends-to-contacts' ),
			'%d friends'                                                                                                                              => __( '%d Contacts', 'buddypress-friends-to-contacts' ),
			'%d friends accepted your friendship requests'                                                                                            => __( '%d friends accepted your friendship requests', 'buddypress-friends-to-contacts' ),
			'%s friend'                                                                                                                               => __( '%s contact', 'buddypress-friends-to-contacts' ),
			'%s accepted your friendship request'                                                                                                     => __( '%s accepted your contact request', 'buddypress-friends-to-contacts' ),
			'%s friends'                                                                                                                              => __( '%s contacts', 'buddypress-friends-to-contacts' ),
			'%s hasn\'t created any friend connections yet.'                                                                                          => __( '%s hasn\'t created any contact connections yet.', 'buddypress-friends-to-contacts' ),
			'%s\'s Friends'                                                                                                                           => __( '%s\'s Friends', 'buddypress-friends-to-contacts' ),
			'%s\'s Friends'                                                                                                                           => __( '%s\'s Contacts', 'buddypress-friends-to-contacts' ),
			'{{initiator.name}} wants to add you as a friend.\n
\n
To accept this request and manage all of your pending requests, visit: {{{friend-requests.url}}}\n
\n
To view {{initiator.name}}\'s profile, visit: {{{initiator.url}}}'                                                                        => __( '{{initiator.name}} wants to add you as a contact.\n
\n
To accept this request and manage all of your pending requests, visit: {{{friend-requests.url}}}\n
\n
To view {{initiator.name}}\'s profile, visit: {{{initiator.url}}}', 'buddypress-friends-to-contacts' ),
			'[{{{site.name}}}] {{friend.name}} accepted your friendship request'                                                                      => __( '[{{{site.name}}}] {{friend.name}} accepted your contact request', 'buddypress-friends-to-contacts' ),
			'<a href="{{{friendship.url}}}">{{friend.name}}</a> accepted your friend request.'                                                        => __( '<a href="{{{friendship.url}}}">{{friend.name}}</a> accepted your contact request.', 'buddypress-friends-to-contacts' ),
			'{{friend.name}} accepted your friend request.\n
\n
To learn more about them, visit their profile: {{{friendship.url}}}'                                                                      => __( '{{friend.name}} accepted your contact request.\n
\n
To learn more about them, visit their profile: {{{friendship.url}}}', 'buddypress-friends-to-contacts' ),
			'<a href="{{{initiator.url}}}">{{initiator.name}}</a> wants to add you as a friend.\n
\n
To accept this request and manage all of your pending requests, visit: <a href="{{{friend-requests.url}}}">{{{friend-requests.url}}}</a>' => __( '<a href="{{{initiator.url}}}">{{initiator.name}}</a> wants to add you as a contact.\n
\n
To accept this request and manage all of your pending requests, visit: <a href="{{{friend-requests.url}}}">{{{friend-requests.url}}}</a>', 'buddypress-friends-to-contacts' ),
			'[{{{site.name}}}] New friendship request from {{initiator.name}}'                                                                        => __( '[{{{site.name}}}] New contact request from {{initiator.name}}', 'buddypress-friends-to-contacts' ),
		);

		$translations[ 'Friends screen sub nav' ] = array(
			'Friendships' => _x( 'Contacts', 'Friends screen sub nav', 'buddypress-friends-to-contacts' )
		);

		$translations[ 'Friends screen page <title>' ] = array(
			'Friend Connections' => _x( 'Relationships', 'Friends screen page <title>', 'buddypress-friends-to-contacts' ),
		);

		$translations[ 'Friend settings on notification settings page' ] = array(
			'Friends' => _x( 'Contacts', 'Friend settings on notification settings page', 'buddypress-friends-to-contacts' ),
			'A member sends you a friendship request' => _x( 'A member sends you a contact request', 'Friend settings on notification settings page', 'buddypress-friends-to-contacts' ),
			'A member accepts your friendship request' => _x( 'A member accepts your contact request', 'Friend settings on notification settings page', 'buddypress-friends-to-contacts' ),
		);

		$translations[ 'My Account Friends menu' ] = array(
			'Friends'    => _x( 'Contacts', 'My Account Friends menu', 'buddypress-friends-to-contacts' ),
			'Friends %s' => _x( 'Contacts %s', 'My Account Friends menu', 'buddypress-friends-to-contacts' ),
		);

		$translations[ 'My Account Friends menu sub nav' ] = array(
			'Friendships' => _x( 'Contacts', 'My Account Friends menu sub nav', 'buddypress-friends-to-contacts' )
		);

		$translations[ 'My Account Activity sub nav' ] = array(
			'Friends'    => _x( 'Contacts', 'My Account Activity sub nav', 'buddypress-friends-to-contacts' ),
		);

		$translations[ 'Profile activity screen sub nav' ] = array(
			'Friends'    => _x( 'Contacts', 'Profile activity screen sub nav', 'buddypress-friends-to-contacts' ),
		);

		$translations[ 'Visibility level setting' ] = array(
			'My Friends' => _x( 'My Contacts', 'Visibility level setting', 'buddypress-friends-to-contacts' )
		);



		return $translations;
	}
}

bpftc_load_translation( 'BPFTC_Translate_BuddyPress' );

