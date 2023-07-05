<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Haruncpi\LaravelIdGenerator\IdGenerator;
    
use App\Exports\OrdersExportView;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'find']]);
    }

    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(10);
        return view('orders.index')->with('orders', $orders);
    }

    public function export($id){
        $order = Order::find($id);  
        $shipments =  $order->shipments;
        $statuses = $order->statuses;

        $data = [
            'order'   => $order,
            'shipments'   => $shipments,
            'statuses'   => $statuses,
        ];


        $pdf = PDF::loadView('export', $data);
        // If you want to store the generated pdf to the server then you can use the store function
        // $pdf->save(storage_path().'_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->download('customers.pdf');

        // return view('export')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input_page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'track_id' => 'required',
            'company' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'type' => 'required',
            'weight' => 'required',
            'pick_up_city' => 'required',
            'pick_up_country' => 'required',
            'pick_up_street' => 'required',
            'pick_up_zip' => 'required',
            'pick_up_lat' => 'required',
            'pick_up_lon' => 'required',  
        
            'drop_off_city' => 'required',
            'drop_off_country' => 'required',
            'drop_off_street' => 'required',
            'drop_off_zip' => 'required',
            'drop_off_lat' => 'required',
            'drop_off_lon' => 'required',
        ]);

        $latestOrder = Order::orderBy('created_at','DESC')->first();
        if($latestOrder === null){
            $latestOrderId = 0;
        }else{
            $latestOrderId = $latestOrder->id;
        }

        $latestOrderId = $latestOrderId + 1123;
        
        $order = new Order();
        // $order->order_id = 'TM'.str_pad($latestOrderId + 1, 3, "0", STR_PAD_LEFT);
        $order->order_id = $request->input('track_id').str_pad($latestOrderId + 1, 3, "0", STR_PAD_LEFT);
    
        $order->user_id = auth()->user()->id;
        $order->company = $request->input('company');
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->type = $request->input('type');
        $order->weight = $request->input('weight');
        $order->current_process = "In factory";

        $order->pick_up_city = $request->input('pick_up_city');
        $order->pick_up_country = $request->input('pick_up_country');
        $order->pick_up_street = $request->input('pick_up_street');
        $order->pick_up_zip = $request->input('pick_up_zip');
        $order->pick_up_lat = $request->input('pick_up_lat');
        $order->pick_up_lon = $request->input('pick_up_lon');

        $order->drop_off_city = $request->input('drop_off_city');
        $order->drop_off_country = $request->input('drop_off_country');
        $order->drop_off_street = $request->input('drop_off_street');
        $order->drop_off_zip = $request->input('drop_off_zip');
        $order->drop_off_lat = $request->input('drop_off_lat');
        $order->drop_off_lon = $request->input('drop_off_lon');

        if($request->input('isNew')){
            $order->isNew = true;
        }

        $order->distance = $this->distance($request->input('pick_up_lat'),$request->input('pick_up_lon'),$request->input('drop_off_lat'),$request->input('drop_off_lon'));

        $order->save();

        return redirect('/home')->with('success', trans('strings.order_created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);  
        $shipments =  $order->shipments;
        $statuses = $order->statuses;

        $data = [
            'order'   => $order,
            'shipments'   => $shipments,
            'statuses'   => $statuses,
        ];

        return view('tracking_details')->with($data);
    }

    public function find(Request $request)
    {
        $search = $request->input('search');
        $order = Order::select("*")->where('order_id', $search)->get()->first();
        

        if($order){
            $shipments =  $order->shipments;
            $statuses = $order->statuses;
            $data = [
                'order'   => $order,
                'shipments'   => $shipments,
                'statuses'   => $statuses,
            ];
            return view('tracking_details')->with($data);
        }else{
            
            // return redirect()->back()->with("error" => "not found");
            return redirect()->back()->with('error', trans('strings.not_found_order'));   
        }

        
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $order = Order::select("*")->where('order_id','LIKE','%'.$search.'%')->get();
        return $order;

    

        // if($order){
        //     $shipments =  $order->shipments;
        //     $statuses = $order->statuses;
        //     $data = [
        //         'order'   => $order,
        //         'shipments'   => $shipments,
        //         'statuses'   => $statuses,
        //     ];
        //     return view('tracking_details')->with($data);
        // }else{
            
        //     // return redirect()->back()->with("error" => "not found");
        //     return redirect()->back()->with('error', trans('strings.not_found_order'));   
        // }

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);

        if(auth()->user()->id !== $order->user_id){
            return redirect('/orders')->with('error', "Unauthorized Page");
        }
    
        return view('orders.edit')->with('order', $order);
    }

    public function current_process_of_goods($id)
    {
        $order = Order::find($id);

        if(auth()->user()->id !== $order->user_id){
            return redirect('/orders')->
            with('error', "Unauthorized Page");
        }
        
        return view('orders.current_process')->with('order', $order);
    }

    public function update_current_proccess_of_goods(Request $request, $id)
    {
        $order = Order::find($id);
        $process = $request->input('radioGroup2');
        if($process === "Delivered"){
            $order->delivered_at = Carbon::now();
            $order->current_lat = $order->drop_off_lat;
            $order->current_lon = $order->drop_off_lon;
        }else{
            $order->delivered_at = null;
            $order->current_lat = null;
            $order->current_lon = null;
        }
    
        $order->current_process = $process;
        $order->save();

        $shipments =  $order->shipments;
        $statuses = $order->statuses;

        $data = [
            'order'   => $order,
            'shipments'   => $shipments,
            'statuses'   => $statuses,
            'success'  => 'Order Current proccess of goods updated',
        ];

        // return view('orders.details')->with($data);
        // redirect()->back()->with('success', 'your message,here');
        return redirect()->route('orders.show', $id)->with($data);   
    }


    public function current_location($id)
    {
        $order = Order::find($id);

        if(auth()->user()->id !== $order->user_id){
            return redirect('/orders')->
            with('error', "Unauthorized Page");
        }
        
        return view('orders.current_location')->with('order', $order);
    }

    public function update_current_location(Request $request, $id)
    {

        $this->validate($request, [
            'current_address' => 'required',
            'current_lat' => 'required',
            'current_lon' => 'required',
        ]);

        $order = Order::find($id);
        $order->current_address = $request->input('current_address');
        $order->current_lat = $request->input('current_lat');
        $order->current_lon = $request->input('current_lon');
        
        $order->distance_to_current = $this->distance($order->pick_up_lat,$order->pick_up_lon,$request->input('current_lat'),$request->input('current_lon'));
        
        $order->save();

        $shipments =  $order->shipments;
        $statuses = $order->statuses;

        $data = [
            'order'   => $order,
            'shipments'   => $shipments,
            'statuses'   => $statuses,
            'success'  => 'Order Current location updated',
        ];

        // return view('orders.details')->with($data);
        
        return redirect()->route('orders.show', $id)->with($data);   
       
    }

    
    public function shipment_position($id)
    {
        $order = Order::find($id);

        if(auth()->user()->id !== $order->user_id){
            return redirect('/orders')->
            with('error', "Unauthorized Page");
        }
        
        return view('orders.shipment_position')->with('order', $order);
    }

    public function truck_status($id)
    {
        $order = Order::find($id);

        if(auth()->user()->id !== $order->user_id){
            return redirect('/orders')->
            with('error', "Unauthorized Page");
        }
        
        return view('orders.truck_status')->with('order', $order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'company' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'type' => 'required',
            'pick_up_city' => 'required',
            'pick_up_country' => 'required',
            'pick_up_street' => 'required',
            'pick_up_zip' => 'required',
            'pick_up_lat' => 'required',
            'pick_up_lon' => 'required',  
        
            'drop_off_city' => 'required',
            'drop_off_country' => 'required',
            'drop_off_street' => 'required',
            'drop_off_zip' => 'required',
            'drop_off_lat' => 'required',
            'drop_off_lon' => 'required',
        ]);

        // Order::find($id)->update($request->all());

        $order = Order::find($id);
        $order->company = $request->input('company');
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->type = $request->input('type');
        $order->weight = $request->input('weight');

        $order->pick_up_city = $request->input('pick_up_city');
        $order->pick_up_country = $request->input('pick_up_country');
        $order->pick_up_street = $request->input('pick_up_street');
        $order->pick_up_zip = $request->input('pick_up_zip');
        $order->pick_up_lat = $request->input('pick_up_lat');
        $order->pick_up_lon = $request->input('pick_up_lon');

        $order->drop_off_city = $request->input('drop_off_city');
        $order->drop_off_country = $request->input('drop_off_country');
        $order->drop_off_street = $request->input('drop_off_street');
        $order->drop_off_zip = $request->input('drop_off_zip');
        $order->drop_off_lat = $request->input('drop_off_lat');
        $order->drop_off_lon = $request->input('drop_off_lon');

        $order->distance = $this->distance($request->input('pick_up_lat'),$request->input('pick_up_lon'),$request->input('drop_off_lat'),$request->input('drop_off_lon'));

        $order->save();

        
        $shipments =  $order->shipments;
        $statuses = $order->statuses;

        $data = [
            'order'   => $order,
            'shipments'   => $shipments,
            'statuses'   => $statuses,
            'success'  => 'Order updated',
        ];

        
        return redirect('/home')->with('success', trans('strings.order_updated'));   

        // return redirect()->route('orders.show', $id)->with($data);   
        // return redirect('/orders')->with('success', "Order updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($order)
    {
        $order = Order::find($order);

        if(auth()->user()->id !== $order->user_id){
            return redirect('/orders')->with('error', "Unauthorized Page");
        }

        

        $order->delete();

        return redirect('/home')->with('success', trans('strings.order_removed'));   
    }

    function distance($lat1, $lon1, $lat2, $lon2) {
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
          return 0;
        }
        else {
          $theta = $lon1 - $lon2;
          $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
          $dist = acos($dist);
          $dist = rad2deg($dist);
          $miles = $dist * 60 * 1.1515;
      
          return (int) ($miles * 1.609344);
        }
    }

    public function export_view(){
        // return Excel::download(new OrdersExportView(), "orders.xlsx");
        
        return Excel::download(new OrdersExportView, 'orders.xlsx');
    }

}
