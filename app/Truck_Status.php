<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck_Status extends Model
{
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
