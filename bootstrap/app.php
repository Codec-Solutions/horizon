<?php

if (version_compare(PHP_VERSION, '7.3.1') === -1) {
    $version = explode('-', PHP_VERSION);
    echo 'This version of BabiPHP requires at least PHP 7.3.1. ';
    echo 'You are currently running ' . $version[0] . '. Please update your PHP version.';
    return;
}

define('HORIZON_START', microtime(true));
define('HORIZON_ROOT', dirname(dirname(__FILE__)));
define('HORIZON_WEBROOT', '/public/');
define('HORIZON_PUBLIC', HORIZON_ROOT . HORIZON_WEBROOT);
define('HORIZON_APP', HORIZON_ROOT . '/app/');
define('HORIZON_CONFIG', HORIZON_ROOT . '/config/');
define('HORIZON_RESOURCES', HORIZON_ROOT . '/resources/');
define('HORIZON_APP_NAMESPACE', 'App');
define('HORIZON_NOTFOUND_PAGE', 'error');

require HORIZON_ROOT . '/vendor/autoload.php';

$appConfig = (array)require(HORIZON_CONFIG . 'app.php');
$authConfig = (array)require(HORIZON_CONFIG . 'auth.php');
$databaseConfig = (array)require(HORIZON_CONFIG . 'database.php');
$settings = array_merge($appConfig, $authConfig, $databaseConfig);

$app = new Horizon\Core\App($settings);

require __DIR__ . '/dependencies.php';
