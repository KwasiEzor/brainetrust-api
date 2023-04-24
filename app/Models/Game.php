<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    use HasFactory;
    protected $fillable=[
        'competition_id',
        'game_result_id',
        'round_number'
    ];

    public function competition():BelongsTo
    {
        return $this->belongsTo(Competition::class);
    }

    public function gameResults():HasMany
    {
        return $this->hasMany(GameResult::class);
    }
    public function gameRounds():HasMany
    {
        return $this->hasMany(GameRound::class);
    }
}
