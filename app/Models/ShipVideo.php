<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShipVideo extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    //
    public $fillable = ["title", "video"];

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            \Storage::disk('uploads')->delete($obj->video);
       });
    }

    public function setVideoAttribute($value)
    {
        $attribute_name = "video";
        $disk = "public";
        $destination_path = "public/uploads/vidoes";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

    }
}
