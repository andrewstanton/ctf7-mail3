<?php
/**
 * Plugin Name: Contact Form 7 Mail 3
 * Plugin URI: https://andrewrminion.com/contact-form-7-google-analytics/
 * Description: Adds Google Analytics Event Tracking to all Contact Form 7 forms.
 * Tags: contact form, contact form 7, cf7, contactform7, mail3
 * Version: 0.0.1
 * Author: Andrew Stanton (Todd Productions Inc.)
 * Author URI: https://toddproductions.com
 *
 * @package WordPress
 * @subpackage CF7_Mail3
 * 
 * Based on code found: https://wordpress.org/support/topic/adding-mail-3-coding-included/
 */

 // Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//If Contact Form 7 Is Not Active
if ( !in_array( 'contact-form-7/wp-contact-form-7.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    exit;
}




?>