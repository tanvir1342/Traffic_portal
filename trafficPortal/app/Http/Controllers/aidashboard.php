<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrafficPoint;
use App\Models\EmployeeDetails;
use DB;

class aidashboard extends Controller
{
    public function dutyEmployeProfile($eID)
    {
        
        $employee = EmployeeDetails::where('tp_id','=',$eID)->get();
        return $employee;

    }
    public function index()
    {
        $trafficpoint = TrafficPoint::where('tp_incharge_name','=','MH Soikot')->get();
   
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
