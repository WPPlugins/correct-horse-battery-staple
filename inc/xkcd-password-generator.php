<?php

if ( ! defined( 'ABSPATH' ) ) exit;


/**
 * Function to generate XKCD-style passwords
 *
 */
function cc_xkcd_password_generator( $randompw ) {
	//* If the documentation has been ignored and the plugin has been installed on a windows server, use the default WP strong password generator
	if ( strncasecmp( PHP_OS, 'WIN', 3 ) == 0 ) {
		return $randompw;
	} else {
		$lines = file( '/usr/share/dict/words', FILE_IGNORE_NEW_LINES );
		$length = count( $lines );
		$password = '';
		$wordsreq = 4;
		$maxletters = 8;

		for ($i = 1; $i <= $wordsreq; $i++) {
			$plain = FALSE;
			while (!$plain) {
				// Get random word from $lines
				$key = mt_rand( 0, $length );
				if ( ( preg_match( "/^[a-z]+$/", $lines[$key] ) == 1 ) && ( strlen( $lines[$key] ) < ( $maxletters + 1 ) ) ) {
					//* String only contains a to z characters
					$plain = TRUE;
					$password = $password . $lines[$key];
					//* Add hyphen between words
					if ( $i != $wordsreq ){
						$password = $password . '-';
					}
				}
			}
		}
		return $password;
	}
}
add_filter( 'random_password', 'cc_xkcd_password_generator' );