<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    //
    
    public $fillable = ["type","count"];
}
