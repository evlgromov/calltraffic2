<?php

namespace App\Providers;

use App\Services\NotificationService\NotificationServiceInterface;
use App\Services\NotificationService\TelegramNotificastionService;
use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(NotificationServiceInterface::class, TelegramNotificastionService::class);
    }
}

