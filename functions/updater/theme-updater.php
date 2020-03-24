<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://alx.media', // Site where EDD is hosted
		'item_name'      => 'Magaziner', // Name of theme
		'theme_slug'     => 'magaziner', // Theme slug
		'version'        => '3.0.5', // The current version of this theme
		'author'         => 'AlxMedia', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'magaziner' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'magaziner' ),
		'license-key'               => __( 'License Key', 'magaziner' ),
		'license-action'            => __( 'License Action', 'magaziner' ),
		'deactivate-license'        => __( 'Deactivate License', 'magaziner' ),
		'activate-license'          => __( 'Activate License', 'magaziner' ),
		'status-unknown'            => __( 'License status is unknown.', 'magaziner' ),
		'renew'                     => __( 'Renew?', 'magaziner' ),
		'unlimited'                 => __( 'unlimited', 'magaziner' ),
		'license-key-is-active'     => __( 'License key is active.', 'magaziner' ),
		'expires%s'                 => __( 'Expires %s.', 'magaziner' ),
		'expires-never'             => __( 'Lifetime License.', 'magaziner' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'magaziner' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'magaziner' ),
		'license-key-expired'       => __( 'License key has expired.', 'magaziner' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'magaziner' ),
		'license-is-inactive'       => __( 'License is inactive.', 'magaziner' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'magaziner' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'magaziner' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'magaziner' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'magaziner' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'magaziner' ),
	)

);
