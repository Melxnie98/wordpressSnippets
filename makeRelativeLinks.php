<?php
function convert_specific_urls_to_relative($content) {
    // Define the URLs to convert
    $urls_to_convert = [
        'https://teachwell.auckland.ac.nz',
        'https://teachwell.blogs.auckland.ac.nz'
    ];

    foreach ($urls_to_convert as $url) {
        // Replace the absolute URL with an empty string or a relative path
        $content = str_replace($url, '', $content);
    }

    return $content;
}

// Add the filter to the content
add_filter('the_content', 'convert_specific_urls_to_relative');
