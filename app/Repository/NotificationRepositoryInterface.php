<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface NotificationRepositoryInterface
{
    public function create(array $attributes): Model;

    public function find($id): ?Model;

    public function all(): Collection;
}
