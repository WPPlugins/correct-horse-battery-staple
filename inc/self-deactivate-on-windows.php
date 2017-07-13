<?php

if ( ! defined( 'ABSPATH' ) ) exit;


/**
 * Function to show the deactivation message
 *
 */
function cc_xkcd_password_admin_deactivation_notice() {

	$windows_msg = sprintf( __( 'can not be used on a Windows server. The plugin has been deactivated', 'correct-horse-battery-staple' ) );

	echo '<div class="updated"><p><strong>Correct Horse Battery Staple</strong> ' . $windows_msg . '</p></div>';
	if ( isset( $_GET['activate'] ) ) {
		unset( $_GET['activate'] );
	}
}


/**
 * Show the deactivation message and self-deactivate if the plugin has been installed on Windows
 *
 */
function cc_xkcd_password_deactivate_on_windows(){
	if ( ( strncasecmp( PHP_OS, 'WIN', 3 ) == 0 ) && ( current_user_can( 'activate_plugins' ) ) ) {
		add_action( 'admin_notices', 'cc_xkcd_password_admin_deactivation_notice' );
		deactivate_plugins( CC_XKCD_PASSWORD_PLUGIN_BASENAME );
	}
}
add_action( 'admin_init', 'cc_xkcd_password_deactivate_on_windows' );