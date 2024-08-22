<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreChatRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'telegram_id' => ['required', 'integer', 'unique:chats,telegram_id'],
            'message' => ['required', 'string'],
            'period' => ['required', 'integer', 'min:15'],
        ];
    }

    public function failedValidation(Validator $validator): HttpResponseException
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'errors' => $validator->errors()
        ], 422));
    }

    public function messages(): array
    {
        return [
            'telegram_id.required' => 'Необходимо указать ID чата',
            'telegram_id.integer' => 'Чат ID должен иметь числовое значение',
            'telegram_id.unique' => 'Чат ID с указанным Telegram ID уже существует',
            'message.required' => 'Необходимо указать сообщение',
            'message.string' => 'Сообщение должно иметь строковый формат',
            'period.required' => 'Необходимо указать период отправки сообщений',
            'period.integer' => 'Период должен иметь числовое значение',
            'period.min' => 'Период должен быть больше или равен 15 секундам',
        ];
    }
}
