<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    public $translatable = ['slider_title'];
    protected $fillable = [

        'slider_title',
        'desc',
        'status',
        'updated_at',
         'created_at'
    ];
    protected $table = 'sliders';
    protected $guarded = [];
}
