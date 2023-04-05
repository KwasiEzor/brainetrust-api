<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Competition extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'club_id',
        'competition_type_id',
        'start_date',
        'end_date',
        'details'
    ];
    protected $casts=[
        'start_date'=>'datetime',
        'end_date'=>'datetime',
    ];

    /**
     * @return BelongsTo
     */
    public function club():BelongsTo
    {
        return $this->belongsTo(Club::class);
    }

    /**
     * @return BelongsTo
     */
    public function competitionType():BelongsTo
    {
        return $this->belongsTo(CompetitionType::class);
    }

    /**
     * @return HasMany
     */
    public function games():HasMany
    {
        return $this->hasMany(Game::class);
    }

    public function finalGameResults():HasMany
    {
        return $this->hasMany(FinalGameResult::class);
    }
}
