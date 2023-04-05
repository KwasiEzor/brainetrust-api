<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FinalGameResult extends Model
{
    use HasFactory;

    protected $fillable=[
        'competition_id',
        'player_id',
        'score'
    ];

    public function competition():BelongsTo
    {
        return $this->belongsTo(Competition::class);
    }

    public function players():HasMany
    {
        return $this->hasMany(Player::class);
    }
}
