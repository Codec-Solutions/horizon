<?php

if (version_compare(PHP_VERSION, '7.2.5') === -1) {
    $version = explode('-', PHP_VERSION);
    echo 'This version of Horizom requires at least PHP 7.2.5. ';
    echo 'You are currently running ' . $version[0] . '. Please update your PHP version.';
    return;
}

define('ROOT', dirname(dirname(__FILE__)));
define('WEBROOT', '/public/');
define('PUBLIC', ROOT . WEBROOT);
define('APP', ROOT . '/app/');
define('CONFIG', ROOT . '/config/');
define('RESOURCES', ROOT . '/resources/');

/**
 * Framawork version
 */
define('HORIZOM_VERSION', '1.0.0');

require ROOT . '/vendor/autoload.php';

(new \Horizom\Core\App)->run();
