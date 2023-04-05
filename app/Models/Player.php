<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Player extends Model
{
    use HasFactory;
    protected $fillable=[
        'affiliation_number',
        'user_id',
        'club_id',
        'details'
    ];

    public function playerRoundResults():HasMany
    {
        return $this->hasMany(PlayerRoundResult::class);
    }

    public function finalGameResult():BelongsTo
    {
        return  $this->belongsTo(FinalGameResult::class);
    }

}
