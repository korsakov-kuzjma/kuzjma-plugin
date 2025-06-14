<?
/* 
* Plugin Name: kuzjma-plugin
* Plugin URI: https://github.com/korsakov-kuzjma/kuzjma-plugin
* Description: Дополнение для WordPress
* Version: 0.1
* Author: korsakov-kuzjma
* Author URI: https://github.com/korsakov-kuzjma
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if (defined('WP_DEBUG')) {
    do_action('qm/info', 'WP_DEBUG включен');
}

