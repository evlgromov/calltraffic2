<?php

namespace App\Repository\Eloquent;

use App\Models\Chat;
use App\Repository\ChatRepositoryInterface;
use Illuminate\Support\Collection;

class EloquentChatRepository implements ChatRepositoryInterface {

    protected $model;

    public function __construct(Chat $model) {
        $this->model = $model;
    }

    public function create(array $attributes): Chat {
        return $this->model->create($attributes);
    }

    public function find($id): ?Chat {
        return $this->model->find($id);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }
}
