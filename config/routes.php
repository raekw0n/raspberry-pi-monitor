<?php

/*----------------------------------------
 | Configure application routes           |
 ----------------------------------------*/
/** @var \App\Controllers\DashboardController $dashboard */
$app['router']->respond('GET', '/', function () use ($dashboard) {
    return $dashboard->view(['title' => 'Dashboard']);
});

/* @var \App\Controllers\NetworkController $network */
$app['router']->respond('GET', '/network', function () use ($network) {
    return $network->view(['title' => 'Network']);
});

/* @var \App\Controllers\SettingsController $settings */
$app['router']->respond('GET', '/settings', function () use ($settings) {
    return $settings->view(['title' => 'Settings']);
});
