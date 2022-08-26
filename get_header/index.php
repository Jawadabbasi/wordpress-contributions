<?php
// that code put in page.php, single.php etc
// I have put that code in index.php file
get_header( '', array( 'menu' => wp_nav_menu( array(
    'menu' => 'wpdocs_primary_menu',
    'menu_class' => 'wpdocs_header_menu',
    'menu_id' => 'wpdocs_nav_menu',
) ) ) );
?>