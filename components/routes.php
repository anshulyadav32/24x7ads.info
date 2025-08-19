<?php
/**
 * Routing Helper Functions
 * Handles dynamic URL generation based on current file location
 */

function getBaseUrl() {
    // Get the current script's directory relative to document root
    $currentDir = dirname($_SERVER['PHP_SELF']);
    $basePath = '';
    
    // Count how many levels deep we are
    $levels = substr_count($currentDir, '/') - 1;
    
    // If we're not in root, go up the appropriate number of levels
    if ($levels > 0) {
        $basePath = str_repeat('../', $levels);
    }
    
    return $basePath;
}

function url($path = '') {
    $base = getBaseUrl();
    return $base . ltrim($path, '/');
}

function asset($path) {
    $base = getBaseUrl();
    return $base . 'assets/' . ltrim($path, '/');
}

function page($path) {
    $base = getBaseUrl();
    return $base . 'pages/' . ltrim($path, '/');
}

function service($path) {
    $base = getBaseUrl();
    return $base . 'services/' . ltrim($path, '/');
}

function industry($path) {
    $base = getBaseUrl();
    return $base . 'industries/' . ltrim($path, '/');
}

function resource($path) {
    $base = getBaseUrl();
    return $base . 'resources/' . ltrim($path, '/');
}
?>
