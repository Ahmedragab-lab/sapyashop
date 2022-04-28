<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Agreement extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['agreement_title'];
    protected $fillable = [

        'agreement_title',
        'desc',
        'status',
        'updated_at',
         'created_at'
    ];
    protected $table = 'agreements';
    protected $guarded = [];
}
