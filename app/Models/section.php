<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class section extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'sections';
    protected $guarded = [];

    public $translatable = ['section_name'];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
