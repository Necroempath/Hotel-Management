<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
        protected $fillable = [
        'room_title',
        'image',
        'desctiption',
        'price',
        'wi-fi',
        'room_type',
    ];
}
