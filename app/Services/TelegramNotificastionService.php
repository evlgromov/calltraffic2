<?php

namespace App\Services;


use App\Repository\NotificationRepositoryInterface;
use App\Services\API\ApiServiceInterface;
use Illuminate\Support\Facades\Log;

class TelegramNotificastionService implements NotificationServiceInterface {

    public function __construct(
        private ApiServiceInterface $service,
        private NotificationRepositoryInterface $notificationRepository,
        private Log $log
    ) {}

    public function notify($chat): bool
    {
        try {
            $response = $this->service->sendMessage($chat->telegram_id, $chat->message);

            if (!$response) {
                return false;
            }

            $this->notificationRepository->create(['chat_id' => $chat->id]);

            return true;
        } catch (\Exception $e) {
            $this->log::error('TelegramNotificastionService notify exception ' . $e->getMessage() . ' in file ' . $e->getFile() . ' in line ' . $e->getLine());

            return false;
        }
    }
}
