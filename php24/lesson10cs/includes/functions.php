<?php

/**
 * loadContent
 * Load the Content
 * @param $default
 */
function loadContent($where, $default = '')
{
    $content = '';
    // Get the content from the url
    $content = filter_input(INPUT_GET, $where, FILTER_SANITIZE_STRING);
    // Set up the home page as the default
    $content = (empty($content)) ? $default : $content;
    // Include the chosen page
    if ($content) {
        $html = include 'content/' . $content . '.php';
        return $html;
    }
}
?>