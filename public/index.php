<?php

/**
 * Horizom - Light PHP Framework
 *
 * @package  Horizom
 * @author   Horizom Team <horizom-team@gmail.com>
 */

if (version_compare(PHP_VERSION, '7.2.5') === -1) {
    $version = explode('-', PHP_VERSION);
    echo 'This version of Horizom requires at least PHP 7.2.5. ';
    echo 'You are currently running ' . $version[0] . '. Please update your PHP version.';
    return;
}

/**
 * Framawork version
 */
define('HORIZOM_VERSION', '1.0.0');

define('HORIZOM_START', microtime(true));
define('HORIZOM_ROOT', dirname(dirname(__FILE__)));
define('HORIZOM_WEBROOT', '/public/');
define('HORIZOM_PUBLIC', ROOT . WEBROOT);
define('HORIZOM_APP', ROOT . '/app/');
define('HORIZOM_CONFIG', ROOT . '/config/');
define('HORIZOM_RESOURCES', ROOT . '/resources/');

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__ . '/../vendor/autoload.php';


/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$app = new Horizom\Core\App();
$app->run();
