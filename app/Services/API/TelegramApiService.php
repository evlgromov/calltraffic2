<?php

namespace App\Services\API;

use App\Services\API\ApiServiceInterface;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TelegramApiService implements ApiServiceInterface {

    private $domain;

    public function __construct()
    {
        $this->domain = config('services.telegram_domain') . config('services.telegram_token');
    }

    public function sendMessage(int $chat_id, string $text): bool
    {
        try {
            $endpoint = $this->domain . '/sendMessage';
            $response = Http::post($endpoint, [
                'chat_id' => $chat_id,
                'text' => $text
            ]);

            return $response->successful();
        } catch (\Exception $e) {
            Log::error('TelegramApiService sendMessage: ' . $e->getMessage());

            return false;
        }
    }
}
