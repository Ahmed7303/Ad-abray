<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Support\Str;

class BorderItem extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    
    use HasTranslations;
    
    public $fillable = ["border_id","title", "type", "image"];
    protected $translatable = ["title"];

    public function border()
    {
        return $this->belongsTo('App\Models\Border');
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            \Storage::disk('uploads')->delete($obj->image);
       });
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public";
        $destination_path = "public/borders";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

        // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }
}
