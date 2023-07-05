<?php

namespace App\Http\Controllers;

use App\Models\Marketing;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marketing = Marketing::orderBy("created_at", "desc")->get();

        $locations = [
            "from" => $marketing->unique("location_from"),
            "to" => $marketing->unique("location_to")
        ];
        return view('marketing')->with(["marketing" => $marketing, "locations" => $locations]);
    }

    public function search(Request $request)
    {
        
        $from = $request->from;
        $to = $request->to;
        $year = $request->year;
        $marketing = Marketing::orderBy('created_at');
        if ($from) {
            $marketing = $marketing->where('location_from', $from);
        }
        if ($to) {
            $marketing = $marketing->where('location_to', $to);
        }
        if ($year) {
            $marketing = $marketing->whereYear('year', $year);
        }
        $marketing = $marketing->get();

        $allMarketing = Marketing::orderBy("created_at")->get();

        $locations = [
            "from" => $allMarketing->unique("location_from"),
            "to" => $allMarketing->unique("location_to")
        ];
        $filter = [
            "from" => $from,
            "to" => $to,
            "year" => $year,
        ];
        return view('marketing')->with(["marketing" => $marketing, "locations" => $locations, "filter" => $filter]);
    }
}
