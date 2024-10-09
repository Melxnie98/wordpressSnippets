<?php
// Append ACF fields to search content
function my_jetpack_search_custom_content( $content, $post ) {
    if ( in_array( get_post_type( $post ), ['your_custom_post_type', 'another_custom_post_type', 'third_custom_post_type'] ) ) {
        $custom_field_value = get_field('your_acf_field_name', $post->ID); // Replace with your ACF field name
        $content .= ' ' . $custom_field_value; // Append ACF field to the content
    }
    return $content;
}
add_filter( 'jetpack_search_custom_content', 'my_jetpack_search_custom_content', 10, 2 );
