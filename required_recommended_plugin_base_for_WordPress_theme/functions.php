<?php
// registers menus
// see wp_nav_menu in index.php and MENU in the WordPress dashboard
// top_bannerNavs is ID of the menu in the Dashboard and in the index.php page.
register_nav_menus( array(
    'top_bannerNavs' => 'Top bannerNavs',	 
) );


// displays required and recommended plugin when the theme is activated
// see folder INC and read read_me.txt file for more information
include "inc/required_plugins.php";
?>