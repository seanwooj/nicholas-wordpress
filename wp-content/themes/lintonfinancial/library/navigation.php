<?php

/**
 * Register Menus
 * http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 */
register_nav_menus(array(
    'top-bar-l' => 'Left Top Bar', // registers the menu in the WordPress admin menu editor
    'top-bar-r' => 'Right Top Bar',
    'footer-top-menu' => 'Footer Top Menu',
    'footer-bottom-menu' => 'Footer Bottom Menu'
));


/**
 * Left top bar
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
function foundationPress_top_bar_l() {
    wp_nav_menu(array(
        'container' => false,                           // remove nav container
        'container_class' => '',                        // class of container
        'menu' => '',                                   // menu name
        'menu_class' => 'top-bar-menu left',            // adding custom nav class
        'theme_location' => 'top-bar-l',                // where it's located in the theme
        'before' => '',                                 // before each link <a>
        'after' => '',                                  // after each link </a>
        'link_before' => '',                            // before each link text
        'link_after' => '',                             // after each link text
        'depth' => 5,                                   // limit the depth of the nav
        'fallback_cb' => false,                         // fallback function (see below)
        'walker' => new top_bar_walker()
    ));
}

/**
 * Right top bar
 */
function foundationPress_top_bar_r() {
    wp_nav_menu(array(
        'container' => false,                           // remove nav container
        'container_class' => '',                        // class of container
        'menu' => '',                                   // menu name
        'menu_class' => 'top-bar-menu right',           // adding custom nav class
        'theme_location' => 'top-bar-r',                // where it's located in the theme
        'before' => '',                                 // before each link <a>
        'after' => '',                                  // after each link </a>
        'link_before' => '',                            // before each link text
        'link_after' => '',                             // after each link text
        'depth' => 5,                                   // limit the depth of the nav
        'fallback_cb' => false,                         // fallback function (see below)
        'walker' => new top_bar_walker()
    ));
}

/**
 * Footer top menu
 */
function foundationPress_footer_top_menu() {
    wp_nav_menu(array(
        'container' => false,
        'container_class' => '',
        'menu' => '',
        'menu_class' => 'footer-links',
        'theme_location' => 'footer-top-menu',
        'fallback_cb' => false
    ));
}

/**
 * Footer bottom menu
 */
function foundationPress_footer_bottom_menu() {
    wp_nav_menu(array(
        'container' => false,
        'container_class' => '',
        'menu' => '',
        'menu_class' => 'footer-links',
        'theme_location' => 'footer-bottom-menu',
        'fallback_cb' => false
    ));
}

?>
