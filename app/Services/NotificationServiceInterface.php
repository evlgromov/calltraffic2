<?php

namespace App\Services;

use App\Models\Chat;

interface NotificationServiceInterface {
    public function notify(Chat $chat): bool;
}
