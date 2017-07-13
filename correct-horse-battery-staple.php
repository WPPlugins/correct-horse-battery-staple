<?php
/*
Plugin Name: Correct Horse Battery Staple
Plugin URI: http://cubecolour.co.uk/correct-horse-battery-staple
Description: Generates XKCD style strong passwords
Author: cubecolour
Version: 1.0.0
Author URI: http://cubecolour.co.uk
Text Domain: correct-horse-battery-staple

Licence: GPL

props to:
XKCD: https://xkcd.com/936/
bendiy: https://gist.github.com/bendiy/5688443
*/


if ( ! defined( 'ABSPATH' ) ) exit;


/**
 * Define constants
 *
 */
define( 'CC_XKCD_PASSWORD_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'CC_XKCD_PASSWORD_PLUGIN_BASENAME', plugin_basename(__FILE__) );
define( 'CC_XKCD_PASSWORD_PLUGIN_NAME', 'Correct Horse Battery Staple' );


/**
 * Bail out if we're on a  windows server
 *
 */
require_once CC_XKCD_PASSWORD_PLUGIN_PATH . 'inc/self-deactivate-on-windows.php';


/**
 * Plugins page meta links
 *
 */
require_once CC_XKCD_PASSWORD_PLUGIN_PATH . 'inc/plugin-meta-links.php';


/**
 * Replace built-in strong password function with new function to generate XKCD-style passwords
 *
 */
require_once CC_XKCD_PASSWORD_PLUGIN_PATH . 'inc/xkcd-password-generator.php';