<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GameResult extends Model
{
    use HasFactory;

    protected $fillable=[
        'ranking_position',
        'player_top',
        'game_top',
        'percentage',
        'game_id',
        'player_id',
    ];

    public function game():BelongsTo
    {
        return $this->belongsTo(Game::class);
    }

    public function player():BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
}
