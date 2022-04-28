<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReqest extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function service(){
        return $this->belongsTo(Service::class,'service_id');
    }
    public function from(){
        return $this->belongsTo(Country::class,'from_id');
    }
    public function to(){
        return $this->belongsTo(Country::class,'to_id');
    }
}
