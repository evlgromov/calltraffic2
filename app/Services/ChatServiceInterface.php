<?php

namespace App\Services;

use App\Models\Chat;

interface ChatServiceInterface {
    public function create(array $attributes): Chat;
}
