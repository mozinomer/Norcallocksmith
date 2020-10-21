<?php 
add_theme_support( 'post-thumbnails' ); 

//ServicePostType
function Services() {
 
    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,
            'support' => array('title', 'editor', 'excerpt', 'thumbnail'),
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'Services' );