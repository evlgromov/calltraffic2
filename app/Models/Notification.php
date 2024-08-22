<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_id',
    ];

    public function notifications(): BelongsTo
    {
        return $this->BelongsTo(Chat::class);
    }
}
