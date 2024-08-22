<?php

namespace App\Services\MonitoringService;

use App\Repository\ChatRepositoryInterface;
use App\Repository\NotificationRepositoryInterface;
use App\Services\NotificationService\NotificationServiceInterface;
use Carbon\Carbon;

class MonitoringService implements MonitoringServiceInterface {

    public function __construct(
        private NotificationRepositoryInterface $notificationRepository,
        private ChatRepositoryInterface $chatRepository,
        private NotificationServiceInterface $service
    ) {}

    public function check()
    {
        $chats = $this->chatRepository->all();

        if (!$chats) {
            return false;
        }

        foreach ($chats as $chat) {
            $notifications = $chat->notifications();
            $latestNotification = $notifications->orderByDesc('created_at')->first();
            $count = $notifications->count();

            if ($latestNotification ) {
                $now = Carbon::now();
                $lastNotifiedAt = Carbon::parse($latestNotification->created_at);
                $diffInSeconds = $lastNotifiedAt->diffInSeconds($now);
            }

            if ($count === 0 || $diffInSeconds > $chat->period) {
                $this->service->notify($chat);
            }
        }
    }
}
