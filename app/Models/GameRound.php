<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameRound extends Model
{
    use HasFactory;
    protected $fillable=[
        'selected_letters',
        'place_reference',
        'score',
        'solution',
        'game_id',
        'game_round_number'
    ];
}
