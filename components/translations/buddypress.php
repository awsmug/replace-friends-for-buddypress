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
		$this->name       = __( 'BuddyPress Translations', 'replace-friends-for-buddyPress' );
		$this->textdomain = 'buddypress';
	}

	/**
	 * Loading translations
	 *
	 * @since 1.0.0
	 */
	public function translations() {
		$translations[ 'gettext' ] = array(
			' Friendship could not be requested.'                                                                                                     => __( ' Contact could not be requested.', 'replace-friends-for-buddyPress' ),
			'Activity feed for %s\'s friends.'                                                                                                        => __( 'Activity feed for %s\'s contacts.', 'replace-friends-for-buddyPress' ),
			'A member accepts your friendship request'                                                                                                => __( 'A member accepts your contact request', 'replace-friends-for-buddyPress' ),
			'A member has sent a friend request to the recipient.'                                                                                    => __( 'A member has sent a contact request to the recipient.', 'replace-friends-for-buddyPress' ),
			'A member sends you a friendship request'                                                                                                 => __( 'A member sends you a contact request', 'replace-friends-for-buddyPress' ),
			'Add Friend'                                                                                                                              => __( 'Add Contact', 'replace-friends-for-buddyPress' ),
			'All of your friends already belong to this group.'                                                                                       => __( 'All of your contacts already belong to this group.', 'replace-friends-for-buddyPress' ),
			'Cancel Friendship'                                                                                                                       => __( 'Cancel Contact', 'replace-friends-for-buddyPress' ),
			'Cancel Friendship Request'                                                                                                               => __( 'Cancel Contact Request', 'replace-friends-for-buddyPress' ),
			'Counting the number of friends for each user&hellip; %s'                                                                                 => __( 'Counting the number of contacts for each user&hellip; %s', 'replace-friends-for-buddyPress' ),
			'Default friends to show:'                                                                                                                => __( 'Default contacts to show:', 'replace-friends-for-buddyPress' ),
			'Friends'                                                                                                                                 => __( 'Contacts', 'replace-friends-for-buddyPress' ),
			'Friends %s'                                                                                                                              => __( 'Contacts %s', 'replace-friends-for-buddyPress' ),
			'Friends <span class=\"%s\">%s</span>'                                                                                                    => __( 'Contacts <span class=\"%s\">%s</span>', 'replace-friends-for-buddyPress' ),
			'Friendships'                                                                                                                             => __( 'Contacts', 'replace-friends-for-buddyPress' ),
			'Friendship requested'                                                                                                                    => __( 'Contact requested', 'replace-friends-for-buddyPress' ),
			'Friendship Requested'                                                                                                                    => __( 'Contact requested', 'replace-friends-for-buddyPress' ),
			'Group invitations can only be extended to friends.'                                                                                      => __( 'Group invitations can only be extended to contacts.', 'replace-friends-for-buddyPress' ),
			'Max friends to show:'                                                                                                                    => __( 'Max contacts to show:', 'replace-friends-for-buddyPress' ),
			'My Friends'                                                                                                                              => __( 'My Contacts', 'replace-friends-for-buddyPress' ),
			'My Friends %s'                                                                                                                           => __( 'My Contacts %s', 'replace-friends-for-buddyPress' ),
			'My Friends <span>%s</span>'                                                                                                              => __( 'My Contacts <span>%s</span>', 'replace-friends-for-buddyPress' ),
			'New friendship created'                                                                                                                  => __( 'New relationship created', 'replace-friends-for-buddyPress' ),
			'New friendships'                                                                                                                         => __( 'New relationship', 'replace-friends-for-buddyPress' ),
			'Once you\'ve made some friendships, you\'ll be able to invite those members to this group.'                                              => __( 'Once you\'ve made some contacts, you\'ll be able to invite those members to this group.', 'replace-friends-for-buddyPress' ),
			'Once you have built up friend connections you will be able to invite others to your group.'                                              => __( 'Once you have built up contact connections you will be able to invite others to your group.', 'replace-friends-for-buddyPress' ),
			'Recipient has had a friend request accepted by a member.'                                                                                => __( 'Recipient has had a contact request accepted by a member.', 'replace-friends-for-buddyPress' ),
			'Repair total friends count for each member.'                                                                                             => __( 'Repair total contact count for each member.', 'replace-friends-for-buddyPress' ),
			'Search Friends...'                                                                                                                       => __( 'Search Contacts...', 'replace-friends-for-buddyPress' ),
			'Select friends to invite.'                                                                                                               => __( 'Select contacts to invite.', 'replace-friends-for-buddyPress' ),
			'Select people to invite from your friends list.'                                                                                         => __( 'Select people to invite from your contacts list.', 'replace-friends-for-buddyPress' ),
			'The activity of my friends only.'                                                                                                        => __( 'The activity of my contacts only.', 'replace-friends-for-buddyPress' ),
			'Viewing 1 member with friends'                                                                                                           => __( 'Viewing 1 member with contacts', 'replace-friends-for-buddyPress' ),
			'Viewing %1$s - %2$s of %3$s member with friends'                                                                                         => __( 'Viewing %1$s - %2$s of %3$s member with contacts', 'replace-friends-for-buddyPress' ),
			'Viewing %1$s - %2$s of %3$s members with friends'                                                                                        => __( 'Viewing %1$s - %2$s of %3$s members with contacts', 'replace-friends-for-buddyPress' ),
			'You are already friends with this user'                                                                                                  => __( 'You are already in contact with this user', 'replace-friends-for-buddyPress' ),
			'You already have a pending friendship request with this user'                                                                            => __( 'You already have a pending contact request with this user', 'replace-friends-for-buddyPress' ),
			'You are not yet friends with this user'                                                                                                  => __( 'You are not yet in contact with this user', 'replace-friends-for-buddyPress' ),
			'You have a friendship request from %s'                                                                                                   => __( 'You have a contact request from %s', 'replace-friends-for-buddyPress' ),
			'You have a pending friendship request with this user'                                                                                    => __( 'You have a pending contact request with this user', 'replace-friends-for-buddyPress' ),
			'You have no pending friendship requests.'                                                                                                => __( 'You have no pending friendship requests.', 'replace-friends-for-buddyPress' ),
			'You have %d pending friendship requests'                                                                                                 => __( 'You have %d pending friendship requests', 'replace-friends-for-buddyPress' ),
			'You haven\'t added any friend connections yet.'                                                                                          => __( 'You haven\'t added any contact connections yet.', 'replace-friends-for-buddyPress' ),
			'%1$s and %2$s are now friends'                                                                                                           => __( '%1$s and %2$s are now contacts', 'replace-friends-for-buddyPress' ),
			'%d friend'                                                                                                                               => __( '%d Contact', 'replace-friends-for-buddyPress' ),
			'%d friends'                                                                                                                              => __( '%d Contacts', 'replace-friends-for-buddyPress' ),
			'%d friends accepted your friendship requests'                                                                                            => __( '%d friends accepted your friendship requests', 'replace-friends-for-buddyPress' ),
			'%s friend'                                                                                                                               => __( '%s contact', 'replace-friends-for-buddyPress' ),
			'%s accepted your friendship request'                                                                                                     => __( '%s accepted your contact request', 'replace-friends-for-buddyPress' ),
			'%s friends'                                                                                                                              => __( '%s contacts', 'replace-friends-for-buddyPress' ),
			'%s hasn\'t created any friend connections yet.'                                                                                          => __( '%s hasn\'t created any contact connections yet.', 'replace-friends-for-buddyPress' ),
			'%s\'s Friends'                                                                                                                           => __( '%s\'s Friends', 'replace-friends-for-buddyPress' ),
			'%s\'s Friends'                                                                                                                           => __( '%s\'s Contacts', 'replace-friends-for-buddyPress' ),
			'{{initiator.name}} wants to add you as a friend.\n
\n
To accept this request and manage all of your pending requests, visit: {{{friend-requests.url}}}\n
\n
To view {{initiator.name}}\'s profile, visit: {{{initiator.url}}}'                                                                        => __( '{{initiator.name}} wants to add you as a contact.\n
\n
To accept this request and manage all of your pending requests, visit: {{{friend-requests.url}}}\n
\n
To view {{initiator.name}}\'s profile, visit: {{{initiator.url}}}', 'replace-friends-for-buddyPress' ),
			'[{{{site.name}}}] {{friend.name}} accepted your friendship request'                                                                      => __( '[{{{site.name}}}] {{friend.name}} accepted your contact request', 'replace-friends-for-buddyPress' ),
			'<a href="{{{friendship.url}}}">{{friend.name}}</a> accepted your friend request.'                                                        => __( '<a href="{{{friendship.url}}}">{{friend.name}}</a> accepted your contact request.', 'replace-friends-for-buddyPress' ),
			'{{friend.name}} accepted your friend request.\n
\n
To learn more about them, visit their profile: {{{friendship.url}}}'                                                                      => __( '{{friend.name}} accepted your contact request.\n
\n
To learn more about them, visit their profile: {{{friendship.url}}}', 'replace-friends-for-buddyPress' ),
			'<a href="{{{initiator.url}}}">{{initiator.name}}</a> wants to add you as a friend.\n
\n
To accept this request and manage all of your pending requests, visit: <a href="{{{friend-requests.url}}}">{{{friend-requests.url}}}</a>' => __( '<a href="{{{initiator.url}}}">{{initiator.name}}</a> wants to add you as a contact.\n
\n
To accept this request and manage all of your pending requests, visit: <a href="{{{friend-requests.url}}}">{{{friend-requests.url}}}</a>', 'replace-friends-for-buddyPress' ),
			'[{{{site.name}}}] New friendship request from {{initiator.name}}'                                                                        => __( '[{{{site.name}}}] New contact request from {{initiator.name}}', 'replace-friends-for-buddyPress' ),
		);

		$translations[ 'Friends screen sub nav' ] = array(
			'Friendships' => _x( 'Contacts', 'Friends screen sub nav', 'replace-friends-for-buddyPress' )
		);

		$translations[ 'Friends screen page <title>' ] = array(
			'Friend Connections' => _x( 'Relationships', 'Friends screen page', 'replace-friends-for-buddyPress' ),
		);

		$translations[ 'Friend settings on notification settings page' ] = array(
			'Friends' => _x( 'Contacts', 'Friend settings on notification settings page', 'replace-friends-for-buddyPress' ),
			'A member sends you a friendship request' => _x( 'A member sends you a contact request', 'Friend settings on notification settings page', 'replace-friends-for-buddyPress' ),
			'A member accepts your friendship request' => _x( 'A member accepts your contact request', 'Friend settings on notification settings page', 'replace-friends-for-buddyPress' ),
		);

		$translations[ 'My Account Friends menu' ] = array(
			'Friends'    => _x( 'Contacts', 'My Account Friends menu', 'replace-friends-for-buddyPress' ),
			'Friends %s' => _x( 'Contacts %s', 'My Account Friends menu', 'replace-friends-for-buddyPress' ),
		);

		$translations[ 'My Account Friends menu sub nav' ] = array(
			'Friendships' => _x( 'Contacts', 'My Account Friends menu sub nav', 'replace-friends-for-buddyPress' )
		);

		$translations[ 'My Account Activity sub nav' ] = array(
			'Friends'    => _x( 'Contacts', 'My Account Activity sub nav', 'replace-friends-for-buddyPress' ),
		);

		$translations[ 'Profile activity screen sub nav' ] = array(
			'Friends'    => _x( 'Contacts', 'Profile activity screen sub nav', 'replace-friends-for-buddyPress' ),
		);

		$translations[ 'Visibility level setting' ] = array(
			'My Friends' => _x( 'My Contacts', 'Visibility level setting', 'replace-friends-for-buddyPress' )
		);

		return $translations;
	}
}

bpftc_load_translation( 'BPFTC_Translate_BuddyPress' );

