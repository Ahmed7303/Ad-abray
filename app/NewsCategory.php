<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewsCategory extends Model
{
    public function news()
    {
        return $this->hasMany('App\Models\News');
    }

    public function scopeLocalize($query){
        return $query->select(DB::raw("id, name_".app()->getLocale()." as name"));
    }


}
