<?php

namespace TheCodingMachine\ServerMonitorPluginRestApi;

use Spatie\Blink\Blink;
use Illuminate\Support\ServiceProvider;
use TheCodingMachine\ServerMonitorPluginNotificationByHost\Commands\AddNotificationByHost;
use TheCodingMachine\ServerMonitorPluginNotificationByHost\Commands\ListNotifications;

class ServerMonitorPluginRestApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../config/server-monitor-plugin-rest-api-route.php');
    }

    public function register()
    {
    }
}
