<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable=[
        'name',
        'locality',
        'email',
        'address',
        'training_day',
        'training_time',
        'description',
        'contact_person',
        'phone_number',
        'mobile_number',
        'province',
    ];
    use HasFactory;
}
