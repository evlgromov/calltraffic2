<?php

namespace App\Providers;

use App\Services\MonitoringService;
use App\Services\MonitoringServiceInterface;
use Illuminate\Support\ServiceProvider;

class MonitoringServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(MonitoringServiceInterface::class, MonitoringService::class);
    }
}

