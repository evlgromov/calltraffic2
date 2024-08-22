<?php

namespace App\Repository\Eloquent;

use App\Models\Notification;
use App\Repository\NotificationRepositoryInterface;
use Illuminate\Support\Collection;

class EloquentNotificationRepository implements NotificationRepositoryInterface {

    protected $model;

    public function __construct(Notification $model) {
        $this->model = $model;
    }

    public function create(array $attributes): Notification {
        return $this->model->create($attributes);
    }

    public function find($id): ?Notification {
        return $this->model->find($id);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }
}
