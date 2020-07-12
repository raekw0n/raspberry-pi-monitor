<?php

namespace RaspiMon\Controllers;

use Pimple\Container;

/**
 * Core controller class.
 */
class CoreController extends Controller
{
    public function __construct(Container $container)
    {
        parent::__construct($container);

        $this->data['core'] = $this->api->call('system');
//        $this->data['core']['fan'] = $this->api->call('system/fan');

        return $this->data;
    }
}
