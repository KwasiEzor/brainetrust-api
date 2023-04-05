<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GameResult extends Model
{
    use HasFactory;

    protected $fillable=[
        'game_id',
        'player_id',
        'score'
    ];

    public function game():BelongsTo
    {
        return $this->belongsTo(Game::class);
    }
}