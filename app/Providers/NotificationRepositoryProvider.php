<?php

namespace App\Providers;

use App\Repository\Eloquent\EloquentNotificationRepository;
use App\Repository\NotificationRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class NotificationRepositoryProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(NotificationRepositoryInterface::class, EloquentNotificationRepository::class);
    }
}
