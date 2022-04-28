<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tracking_step extends Model
{
    protected $fillable = [

        'track_no',
        'track_name',
         'date',
    ];
}
