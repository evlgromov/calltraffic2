<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'telegram_id',
        'message',
        'period'
    ];

    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }
}
