<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Support\Str;

class Border extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    
    use HasTranslations;
    
    public $fillable = ["district", "border"];
    protected $translatable = ["border"];

    public function items()
    {
        return $this->hasMany('App\Models\BorderItem');
    }
}
