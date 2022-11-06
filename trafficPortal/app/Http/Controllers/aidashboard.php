<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrafficPoint;
use App\Models\EmployeeDetails;
use DB;

class aidashboard extends Controller
{
    public function dutyEmployeProfile($id)
    {
        
        $employee = EmployeeDetails::where('tp_id','=',$id)->get();
        return $employee;

    }
    public function index()
    {
        $trafficpoint = TrafficPoint::where('area_id','=',44223)->get();
   
        return view('area_incharge.aiDashboard')->with('trafficpoint', $trafficpoint);

    }

    public function AiProfile()
    {
        $areaincharge = array();
        $areaincharge = array(
            "name" => "Area Incharge ",
            "id" =>"8743"
        );
        $areaincharges[] = (object)$areaincharge;
        
        return view('area_incharge.areaProfile')->with('areaincharge', $areaincharges);

    }
}
