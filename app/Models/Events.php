<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_title',
        'event_description',
        'event_date',
        'end_date',
        'registration_date',
        'registration_end_date',
        'organizer_name',
        'event_type',
        'event_location',
        'event_link',
        'payment_status',
        'event_price',
    ];


}