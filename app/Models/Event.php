<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_title',
        'event_description',
        'event_date' => 'datetime',
        'end_date' => 'datetime',
        'registration_date' => 'datetime',
        'registration_end_date' => 'datetime',
        'event_time',
        'organizer_name',
        'event_type',
        'event_location',
        // 'event_link',
        'payment_status',
        'event_price',
        // 'event_img'
    ];


}