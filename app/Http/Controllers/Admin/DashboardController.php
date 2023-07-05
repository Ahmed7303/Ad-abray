<?php

namespace App\Http\Controllers\Admin;


use App\Request as Req;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function dashboard(){
        $requests = Req::paginate(10);
        
        // return $requests;
        //dd($this->data['categories']);
        return view('backpack::dashboard')->with("requests",$requests);
    }
}