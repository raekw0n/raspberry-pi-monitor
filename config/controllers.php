<?php

use RaspiMon\Controllers\DashboardController;
use RaspiMon\Controllers\NetworkController;
use RaspiMon\Controllers\SettingsController;

/*----------------------------------------
 | Register application controllers       |
 ----------------------------------------*/
$controllers = [
    'dashboard' => new DashboardController($app),
    'network'   => new NetworkController($app),
    'settings'  => new SettingsController($app),
];

return extract($controllers);