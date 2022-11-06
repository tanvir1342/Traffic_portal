<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DutyList;

class dutyEmployeeControler extends Controller
{
    //
    function loadDutyEmployeeView()
    {

        $id = session()->get('id');
        $employe = DutyList::where('employe_id','=',$id)->get(); 

        

        return view("Duty_Employee.DeDashboard")->with("employe",$employe);

    }
    function loadDutyScheduleView()
    {
        return view("Duty_Employee.DeWeekSchedule");
    }
    function loadE_ChalanView()
    {
        return view("Duty_Employee.DeEchalan");
    }
   
   //
    // public function weekSchedule()
    // {
       
    // }
}
