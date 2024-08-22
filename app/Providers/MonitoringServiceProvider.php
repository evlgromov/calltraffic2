<?php

namespace App\Providers;

use App\Services\MonitoringService\MonitoringService;
use App\Services\MonitoringService\MonitoringServiceInterface;
use Illuminate\Support\ServiceProvider;

class MonitoringServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(MonitoringServiceInterface::class, MonitoringService::class);
    }
}

