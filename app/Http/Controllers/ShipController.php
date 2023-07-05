<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Company;
use App\Models\Experience;
use App\Models\Office;
use App\Models\ShipRepair;
use App\Models\ShipService;
use App\Models\ShipVideo;
use App\Models\Staff;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ship_repairs = ShipRepair::orderBy("created_at", "desc")->get();
        $ship_video = ShipVideo::orderBy("created_at", "desc")->get()->first();
        $ship_services = ShipService::orderBy("created_at", "desc")->get();
        $experiences = Experience::orderBy("created_at", "desc")->get();
        $companies = Company::orderBy("created_at", "desc")->get();
        $certificates = Certificate::orderBy("created_at", "desc")->get();
        $staffs = Staff::localize("Ship")->get(); 
        // $offices = Office::localize()->get();
        // $office = Office::scopeLocalize()->get()->first();
        
        $ship = [
            "ship_repairs" => $ship_repairs,
            "ship_video" => $ship_video,
            "ship_services" => $ship_services,
            "experiences" => $experiences,
            "certificates" => $certificates,
            "companies" => $companies,
            "staffs" => $staffs,
        ];
        return view("ship")->with(["ship" => $ship]);
    }

}
