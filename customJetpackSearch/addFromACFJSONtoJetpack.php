<?php
// Add custom post types to Jetpack Search
function my_custom_post_types_for_jetpack_search_filters( $post_types ) {
    // Replace these with your actual custom post types
    $post_types[] = 'your_custom_post_type'; // First custom post type
    $post_types[] = 'another_custom_post_type'; // Second custom post type
    $post_types[] = 'third_custom_post_type'; // Third custom post type
    return $post_types;
}
add_filter( 'jetpack_search_custom_post_types', 'my_custom_post_types_for_jetpack_search_filters' );
