<?php  declare(strict_types=1);
//session_start();

define ('BASE_PATH', dirname (__FILE__, 2));
define ('APP_PATH', dirname (__FILE__, 2) . DIRECTORY_SEPARATOR . 'App');
define ('CONFIG_PATH', dirname (__FILE__, 2) . DIRECTORY_SEPARATOR . 'config');
define ('LOG_PATH', $_SERVER['DOCUMENT_ROOT'] .DIRECTORY_SEPARATOR . 'logs');

require __DIR__.'/../vendor/autoload.php';

//equire BASE_PATH.'/vendor/autoload';

require __DIR__.'/../App/router.php';
