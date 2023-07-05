<?php

namespace App\Http\Controllers;

use App\Models\Border;
use App\Models\Diagram;
use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function air_Freight()
    {
        $staffs = Staff::localize("Air freight")->get();
        return view('air_Freight')->with("staffs", $staffs);
    }

    public function ocean_Freight()
    {
        $staffs = Staff::localize("Ocean freight")->get();
        $diagrams = Diagram::where("type", "Ocean freight")->orderBy("created_at", "desc")->get();
        return view('ocean_Freight')->with(
            [
                "staffs" => $staffs,
                "diagrams" => $diagrams,
            ]
        );    }

    public function road_Freight()
    {
        $staffs = Staff::localize("Road freight")->get();
        $borders = Border::with("items")->get();
        return view('road_Freight')->with([
            "staffs" => $staffs,
            "borders" => $borders,
        ]);
    }

    public function rail_Freight()
    {
        $staffs = Staff::localize("Rail freight")->get();
        $diagrams = Diagram::where("type", "Rail freight")->orderBy("created_at", "desc")->get();
        return view('rail_Freight')->with(
            [
                "staffs" => $staffs,
                "diagrams" => $diagrams,
            ]
        );
    }

    public function container_Freight()
    {
        $staffs = Staff::localize("Container Transport")->get();
        $diagrams = Diagram::where("type", "Container Transport")->orderBy("created_at", "desc")->get();
        return view('container_Freight')->with(
            [
                "staffs" => $staffs,
                "diagrams" => $diagrams,
            ]
        );    }
}
