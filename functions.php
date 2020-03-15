<?php



//Custom Login
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/login.css" />';
}

add_action('login_head', 'my_custom_login');