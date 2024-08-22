<?php

namespace App\Services\API;

interface ApiServiceInterface {
    public function sendMessage(int $chat_id, string $text): bool;
}
