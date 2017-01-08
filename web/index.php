<?php
/**
 *
 */
define('DEBUG', true);


if(DEBUG == true)
{
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    @ini_set('memory_limit', '128M');
}
else
{
    error_reporting(0);
    ini_set('display_errors', 'Off');
}

include_once (__DIR__ . '/../vendor/autoload.php');
include_once (__DIR__ . '/../system/Autoload.php');

$config = include_once (__DIR__ . '/../app/config/config.php');

(new \system\Core($config))->run();

