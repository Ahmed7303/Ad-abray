<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model{

    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function statuses()
    {
        return $this->hasMany('App\Truck_Status');
    }

    public function shipments()
    {
        return $this->hasMany('App\Shipment_Position');
    }

}
