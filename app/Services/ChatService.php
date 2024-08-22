<?php


namespace App\Services;


use App\Models\Chat;
use App\Repository\ChatRepositoryInterface;

class ChatService implements ChatServiceInterface
{
    public function __construct(private ChatRepositoryInterface $chatRepository) {}

    public function create(array $attributes): Chat
    {
        return $this->chatRepository->create($attributes);
    }
}
