<?php

namespace RaspiMon\Providers;

use Pimple\Container;
use RaspiMon\Api\Caller;
use Pimple\ServiceProviderInterface;;

class ApiServiceProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container['api'] = new Caller();

        return $container;
    }
}