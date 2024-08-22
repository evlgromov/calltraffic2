<?php

namespace App\Providers;

use App\Services\MonitoringService;
use App\Services\MonitoringServiceInterface;
use App\Services\NotificationServiceInterface;
use App\Services\TelegramNotificastionService;
use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(NotificationServiceInterface::class, TelegramNotificastionService::class);
    }
}

