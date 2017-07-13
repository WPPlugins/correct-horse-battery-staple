<?php

if ( ! defined( 'ABSPATH' ) ) exit;


/**
* Add Links to this plugin's entry in the Plugins page
*
*/
function cc_xkcd_password_meta_links( $links, $file ) {

	if ( $file == CC_XKCD_PASSWORD_PLUGIN_BASENAME ) {

		$link = array(
			'donate'	=> 'http://cubecolour.co.uk/wp',
			'review'	=> 'https://wordpress.org/support/view/plugin-reviews/correct-horse-battery-staple#postform',
			'twitter'	=> 'http://twitter.com/cubecolour',
			'support'	=> 'https://wordpress.org/support/plugin/correct-horse-battery-staple',
		);

		$text = array(
			'donate'	=> __( 'Donate', 'correct-horse-battery-staple' ),
			'review'	=> __( 'Review Correct Horse Battery Staple', 'correct-horse-battery-staple' ),
			'twitter'	=> __( 'Cubecolour on Twitter', 'correct-horse-battery-staple' ),
			'support'	=> __( 'Correct Horse Battery Staple Support', 'correct-horse-battery-staple' ),
		);

		$iconstyle		= 'style="-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-size: 14px;margin: 4px 0 -4px;"';

		$addlinks = array(
			'<a href="' . $link[ 'donate' ] . '"><span class="dashicons dashicons-heart"' . $iconstyle . 'title="' . $text[ 'donate' ] . '"></span></a>',
			'<a href="' . $link[ 'review' ] . '"><span class="dashicons dashicons-star-filled"' . $iconstyle . 'title="' . $text[ 'review' ] . '"></span></a>',
			'<a href="' . $link[ 'twitter' ] . '"><span class="dashicons dashicons-twitter" ' . $iconstyle . 'title="' . $text[ 'twitter' ] . '"></span></a>',
			'<a href="' . $link[ 'support' ] . '"> <span class="dashicons dashicons-lightbulb" ' . $iconstyle . 'title="' . $text[ 'support' ] . '"></span></a>',
		);
		//* Return the links for this plugin
		return array_merge( $links, $addlinks );
	}
	//* Return the unaffected links for other plugins
	return $links;
}
add_filter( 'plugin_row_meta', 'cc_xkcd_password_meta_links', 10, 2 );