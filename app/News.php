<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    public function category()
    {
        return $this->belongsTo('App\NewsCategory');
    }

    public function scopeLocalize($query){
        return $query->select(DB::raw("title_".app()->getLocale()." as title, description_".app()->getLocale()." as description, image, created_at, category_id"))
        ->with(array('category'=>function($query){
            $query->select(DB::raw("id, name_".app()->getLocale()." as name"));
        }));
    }

    public function scopeLocalizeByCategory($query, $id){
        return $query->select(DB::raw("title_".app()->getLocale()." as title, description_".app()->getLocale()." as description, image, created_at, category_id"))
        ->with(array('category'=>function($query){
            $query->select(DB::raw("id, name_".app()->getLocale()." as name"));
        }))->where("category_id", $id);
    }

}
