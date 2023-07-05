<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Support\Str;

class Event extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasTranslations;

    protected $fillable = ["name", "title", "description", "images", "video"];
    protected $translatable = ['name', 'title', 'description'];
    protected $casts = [
        'photos' => 'array'
    ];
    public static function boot()
    {
        parent::boot();
        // static::deleting(function ($obj) {
        //     if (count((array)$obj->images)) {
        //         foreach ($obj->images as $file_path) {
        //             // dd($file_path);
        //             \Storage::disk('uploads')->delete($file_path);
        //         }
        //     }
        //     // $disk = config('backpack.base.root_disk_name');
        //     // $destination_path = "public/uploads/gallery";
        //     // \Storage::disk($disk)->delete($destination_path.'/'.$this->image);
        // });
        static::deleting(function($obj) {
            \Storage::disk('uploads')->delete($obj->video);
       });
    }
    
    public function setImagesAttribute($value)
    {
        $attribute_name = "images";
        $disk = "public";
        $destination_path = "public/uploads/events";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }
    // public function setImageAttribute($value)
    // {
    //     $attribute_name = "image";
    //     // or use your own disk, defined in config/filesystems.php
    //     $disk = config('backpack.base.root_disk_name');
    //     // destination path relative to the disk above
    //     $destination_path = "public/uploads/events";

    //     // if the image was erased
    //     if ($value == null) {
    //         // delete the image from disk
    //         \Storage::disk($disk)->delete($this->{$attribute_name});

    //         // set null in the database column
    //         $this->attributes[$attribute_name] = null;
    //     }

    //     // if a base64 was sent, store it in the db
    //     if (Str::startsWith($value, 'data:image')) {
    //         // 0. Make the image
    //         $image = \Image::make($value)->encode('jpg', 90);

    //         // 1. Generate a filename.
    //         $filename = md5($value . time()) . '.jpg';

    //         // 2. Store the image on disk.
    //         \Storage::disk($disk)->put($destination_path . '/' . $filename, $image->stream());

    //         // 3. Delete the previous image, if there was one.
    //         \Storage::disk($disk)->delete($this->{$attribute_name});

    //         // 4. Save the public path to the database
    //         // but first, remove "public/" from the path, since we're pointing to it 
    //         // from the root folder; that way, what gets saved in the db
    //         // is the public URL (everything that comes after the domain name)
    //         $public_destination_path = Str::replaceFirst('public/', '', $destination_path);
    //         $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
    //     }
    // }

    public function setVideoAttribute($value)
    {
        $attribute_name = "video";
        $disk = "public";
        $destination_path = "public/uploads/vidoes";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

        // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }
}
