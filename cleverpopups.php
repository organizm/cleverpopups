<?php
/*
Plugin Name: Clever PopUps
Plugin URI: http://wp-funnel
Description: Clever PopUps
Version: 3.1.3
Author: Alex Samborskiy
Author URI: http://wp-funnel
License: GPLv2 or later
Text Domain: cleverpopups
*/

function cpopups_add_shortcode(){
	echo "Hello";
}
add_shortcode('clever_popup','cpopups_add_shortcode');