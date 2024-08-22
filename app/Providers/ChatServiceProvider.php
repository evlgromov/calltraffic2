<?php


namespace App\Providers;


use App\Services\ChatService;
use App\Services\ChatServiceInterface;
use Illuminate\Support\ServiceProvider;

class ChatServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ChatServiceInterface::class, ChatService::class);
    }
}
