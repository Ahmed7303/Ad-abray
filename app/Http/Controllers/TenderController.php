<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Service;
use App\Models\Staff;
use App\Models\Testimonal;

class TenderController extends Controller
{

    public function index()
    {
        $clients = Client::orderBy("created_at", "desc")->get();
        $services = Service::orderBy("created_at", "desc")->get();
        $testimonals = Testimonal::orderBy("created_at", "desc")->get();
        $staffs = Staff::localize("Tender")->get(); 

        $tender = [
            'clients' => $clients,
            'services' => $services,
            'testimonals' => $testimonals,
            'staffs' => $staffs,
        ];
        return view('tender')->with(["tender" => $tender]);
    }
    
}
