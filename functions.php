<?php

if (!function_exists('safe_require_once')) {
    // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedFunctionFound
    function safe_require_once($path = '') {
        file_exists($path) ? require_once $path : null;
    }
}

// setup_theme
safe_require_once(get_template_directory() . '/setup-theme.php');
