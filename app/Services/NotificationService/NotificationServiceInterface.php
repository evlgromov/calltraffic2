<?php

namespace App\Services\NotificationService;

use App\Models\Chat;

interface NotificationServiceInterface {
    public function notify(Chat $chat): bool;
}
