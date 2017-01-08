<?php
/**
 *
 */

$params = array_merge(
    require(__DIR__ . '/params.php')
);

return [
    'id' => 'shaman',
    'basePath' => __DIR__ . '/../../',
    'sourceLanguage'=>'en_US',
    'language' => 'en',
    'charset' => 'UTF-8',
    'timeZone' => 'Europe/Kiev',
    'name' => 'PHP Shaman',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'session' => [
            'name' => 'shaman-session',
        ],
    ],
    'params' => $params,
];
