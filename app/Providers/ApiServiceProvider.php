<?php

namespace App\Providers;

use App\Services\API\ApiServiceInterface;
use App\Services\API\TelegramApiService;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(ApiServiceInterface::class, TelegramApiService::class);
    }
}
