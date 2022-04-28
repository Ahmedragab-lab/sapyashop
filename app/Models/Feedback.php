<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Spatie\Translatable\HasTranslations;

class Feedback extends Model
{
    use HasFactory;
    // use HasTranslations;
    protected $guarded = [];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function services(){
        return $this->belongsTo(Service::class,'serv_id');
    }
}
