<?php



//Custom Login
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/login.css" />';
}

add_action('login_head', 'my_custom_login');


// This didn't work. Not sure why. created dup header.php and passed new classes directly
//add_filter( 'body_class', 'extwenty_body' );
//function extwenty_body( $classes ) {

	// Check whether the current page should have an overlay header.
	//if ( is_page_template( get_stylesheet_directory().'/template/template-cover-front.php' ) ) {
		//$classes[] = 'overlay-header';
	//}

	//return $classes;

//}

