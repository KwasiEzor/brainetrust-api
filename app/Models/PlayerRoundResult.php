<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlayerRoundResult extends Model
{
    use HasFactory;

    protected $fillable=[
        'game_round_id',
        'player_id',
        'score'
    ];

    public function player():BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
}
