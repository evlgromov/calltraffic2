<?php

namespace App\Providers;

use App\Repository\ChatRepositoryInterface;
use App\Repository\Eloquent\EloquentChatRepository;
use Illuminate\Support\ServiceProvider;

class ChatRepositoryProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ChatRepositoryInterface::class, EloquentChatRepository::class);
    }
}
