<?php
// Returns a certain GET parameter or $default if the parameter
// does not exist.
function get_param($name, $default) {
    if (isset($_GET[$name]))
        return urldecode($_GET[$name]);
    else
        return $default;
}
// Adds a GET parameter to the url. The url is passed by reference.
function add_param(&$url, $name, $value) {
    $sep = strpos($url, '?') !== false ? '&' : '?';
    $url .= $sep . $name . "=" . urlencode($value);
    return $url;
}
// Renders the page content for a certain page ID.
function render_content($pageId) {
    echo t('content') . " $pageId";
}
