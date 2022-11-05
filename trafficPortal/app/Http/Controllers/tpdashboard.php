<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeDetails;
use App\Models\DutyList;

class tpdashboard extends Controller
{
    public function dutyEmployeProfile($idd)
    {
        
        $employe = EmployeeDetails::where('emplyee_id','=',$idd)->get();
        return $employe;

    }

    public function index()
    {
        $adtee = date("Y-m-d");
        $employe = DutyList::where('date','=',$adtee)->get();
        $count = EmployeeDetails::where('status','=','running')->count();
        
     
        return view('tp_dashboard.tpDashboard')->with('employee', $employe)->with('count', $count);

    }

    public function em_list()
    {
        $employe = EmployeeDetails::where('status','=','running')->get();
   
        return view('tp_dashboard.empolyeList')->with('empolye', $employe);

    }
}
