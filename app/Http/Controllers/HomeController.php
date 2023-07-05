<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use Illuminate\Support\Facades\DB;
use App;
use App\Models\Client;
use App\Models\Licenses;
use App\Models\Office;
use App\Models\Servicing;
use App\Models\Slider;
use App\Models\Statistics;
use PharIo\Manifest\License;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;

        $orders = User::where('id',$user_id)->first()->orders()->paginate(10);

        // return $orders;
        return view('my_orders')->with('orders', $orders);
    }

   
    public function search(Request $request)
    {
        $search = $request->input('search');
        $user_id = auth()->user()->id;

        $orders = Order::select("*")->where([
            ['user_id', '=', $user_id],
            ['order_id','LIKE','%'.$search.'%']])->orderBy('created_at','asc')->paginate(10);
        
        // return $orders;
        return view('my_orders')->with('orders', $orders);
    }

    public function home(){
        // $totalWeight = DB::table("orders")->get()->sum("weight");
        // $totalDistance = DB::table("orders")->get()->sum("distance");
        // $totalDistance = round($totalDistance/1000000);
        // $totalClients = DB::table('orders')->where('isNew',true)->count();

        $slider = Slider::orderBy("created_at")->get();
        $servicing = Servicing::orderBy("created_at")->get();
        $clients = Client::orderBy("created_at")->where("potential", false)->get();

        $totalClients = Statistics::where("type", "client")->get()->last();
        $totalDistance = Statistics::where("type", "kilometers")->get()->last();
        $totalWeight = Statistics::where("type", "goods")->get()->last();

        $data = [
            // 'totalWeight'   => $totalWeight + 887170,
            // 'totalDistance'   => $totalDistance + 56,
            // 'totalClients'   => $totalClients + 1123,
            'totalWeight'   => $totalWeight ? $totalWeight->count : 0,
            'totalDistance'   => $totalDistance ? $totalDistance->count : 0,
            'totalClients'   => $totalClients ? $totalClients->count : 0,
            'slider'   => $slider,
            'servicing'   => $servicing,
            'clients'   => $clients,
        ];
        return view('welcome')->with($data);
    }

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

    public function why_us()
    {
        $clients = Client::orderBy("created_at")->where("potential", false)->get();
        $licenses = Licenses::orderBy("created_at")->get();

        return view('why_us')->with([
            "clients" => $clients,
            "licenses" => $licenses,
        ]);
    }

    public function global_locations()
    {
        return view('global_locations');
    }
    
    public function warehousing()
    {
        return view('warehousing');
    }
    
    public function customs_brokerage()
    {
        return view('customs_brokerage');
    }
    
    public function track_shipment()
    {
        return view('track_shipment');
    }
    
    public function contact_us()
    {
        $offices = Office::localize()->get();

        return view('contact_us')->with("offices", $offices);
    }

    public function services()
    {
        
        $clients = Client::orderBy("created_at")->where("potential", false)->get();

        return view('services')->with(["clients" => $clients]);
    }

    public function input_page()
    {
        return view('input_page');
    }
   
}
