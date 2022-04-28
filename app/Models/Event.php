<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Event extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['event_title'];
    protected $fillable = [

        'event_title',
        'desc',
        'limit',
        'status',
        'updated_at',
         'created_at'
    ];
    protected $table = 'events';
    protected $guarded = [];
}
