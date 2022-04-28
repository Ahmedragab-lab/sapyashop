<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRate extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function services(){
        return $this->belongsTo(Service::class,'service_id');
    }
}
