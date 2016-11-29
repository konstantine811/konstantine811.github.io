<?php

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'read_link');
remove_action('wp_head', 'wlwmanifest_link');

show_admin_bar(false);

function logo_widgets_init() {

    register_sidebar( array(
        'name'          => 'Логотип',
        'id'            => 'logo',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<span class="hidden>',
        'after_title'   => '</span>'
    ) );

}

add_action( 'widgets_init', 'logo_widgets_init' );
