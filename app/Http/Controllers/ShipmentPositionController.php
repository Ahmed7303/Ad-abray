<?php

namespace App\Http\Controllers;

use App\Shipment_Position;
use App\Order;
use Illuminate\Http\Request;

class ShipmentPositionController extends Controller
{

    public function add_shipment_position(Request $request, $id)
    {

        $this->validate($request, [
            'position' => 'required',
        ]);

        $order = Order::find($id);

        $position = new Shipment_Position();
        $position->position = $request->input('position');

        $order = $order->shipments()->save($position);

        $order = Order::find($id);
        $shipments =  $order->shipments;
        $statuses = $order->statuses;

        $data = [
            'order'   => $order,
            'shipments'   => $shipments,
            'statuses'   => $statuses,
            'success'  => 'New shipment position added',
        ];

        // return view('orders.details')->with($data);

        return redirect()->route('orders.show', $id)->with($data);
    }
}
