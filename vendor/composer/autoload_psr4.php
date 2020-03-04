<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Psr\\Http\\Server\\' => array($vendorDir . '/psr/http-server-handler/src', $vendorDir . '/psr/http-server-middleware/src'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-factory/src', $vendorDir . '/psr/http-message/src'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'League\\Route\\' => array($vendorDir . '/league/route/src'),
    'League\\Container\\' => array($vendorDir . '/league/container/src'),
    'Laminas\\ZendFrameworkBridge\\' => array($vendorDir . '/laminas/laminas-zendframework-bridge/src'),
    'Laminas\\HttpHandlerRunner\\' => array($vendorDir . '/laminas/laminas-httphandlerrunner/src'),
    'Laminas\\Diactoros\\' => array($vendorDir . '/laminas/laminas-diactoros/src'),
    'FastRoute\\' => array($vendorDir . '/nikic/fast-route/src'),
    'Faker\\' => array($vendorDir . '/fzaninotto/faker/src/Faker'),
    'App\\' => array($baseDir . '/App'),
);
