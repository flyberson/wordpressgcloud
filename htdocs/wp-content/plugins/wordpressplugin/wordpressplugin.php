<?php
/*
Plugin Name: different name
*/

function my_custom_redirect () {
	global $post;
	if ( is_page() ) {
		if ( $redirect = get_post_meta($post->ID, 'redirect', true ) ) {
                        wp_redirect( $redirect );
                        exit;
                }
        }
}
add_action( 'get_header', 'my_custom_redirect' );