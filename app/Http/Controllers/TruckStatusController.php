<?php

namespace App\Http\Controllers;

use App\Truck_Status;
use App\Order;
use Illuminate\Http\Request;

class TruckStatusController extends Controller
{
    public function add_truck_status(Request $request, $id)
    {

        $this->validate($request, [
            'status' => 'required',
        ]);

        $order = Order::find($id);
 
 

        $status = new Truck_Status();
        $status->status = $request->input('status');
    
        $order = $order->statuses()->save($status);
        
        $order = Order::find($id);

        $shipments =  $order->shipments;
        $statuses = $order->statuses;

        $data = [
            'order'   => $order,
            'shipments'   => $shipments,
            'statuses'   => $statuses,
            'success'  => 'New truck status added',
        ];

        // return view('orders.details')->with($data);
        
        return redirect()->route('orders.show', $id)->with($data);   
    }
}
