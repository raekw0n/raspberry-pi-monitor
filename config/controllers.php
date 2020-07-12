<?php

use App\Controllers\DashboardController;
use App\Controllers\NetworkController;
use App\Controllers\SettingsController;

/*----------------------------------------
 | Register application controllers       |
 ----------------------------------------*/
$controllers = [
    'dashboard' => new DashboardController($app),
    'network'   => new NetworkController($app),
    'settings'  => new SettingsController($app),
];

return extract($controllers);