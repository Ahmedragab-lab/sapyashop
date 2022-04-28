<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Product extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $guarded = [];
    public $translatable = ['product_name'];
    public function section(){
        return $this->belongsTo(Section::class,'section_id');
    }
}
