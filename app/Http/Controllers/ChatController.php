<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChatRequest;
use App\Services\ChatServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function __construct(
        private ChatServiceInterface $chatService
    ) {}

    public function storeChat(StoreChatRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();
            $data['user_id'] = auth()->id();

            $this->chatService->create($data);

            return response()->json([
               'success' => true
            ]);
        } catch (\Exception $e) {
            Log::error('Store chat exception ' . $e->getMessage() . ' in file ' . $e->getFile() . ' in line ' . $e->getLine());

            return response()->json([
                'success' => false
            ]);
        }
    }
}
