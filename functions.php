<?php

// safe require_once function
if (!function_exists('litest_require_once')) {
    function litest_require_once($path = '') {
        file_exists($path) ? require_once $path : null;
    }
}


// setup_theme
litest_require_once(get_template_directory() . '/setup-theme.php');
