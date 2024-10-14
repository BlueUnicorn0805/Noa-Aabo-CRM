<?php

/*
Project         :   Noa - Laravel Bootstrap 5 Admin & Dashboard Template
@package        :   Laravel
Laravel Version :   9.2
PHP Version     :   8.1.2
Created Date    :   27-04-2022
Copyright       :   Spruko Technologies Private Limited
Author          :   SPRUKO™
Author URL      :   https://themeforest.net/user/spruko
Support         :   support@spruko.com
License         :   Licensed under ThemeForest Licence
*/

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
