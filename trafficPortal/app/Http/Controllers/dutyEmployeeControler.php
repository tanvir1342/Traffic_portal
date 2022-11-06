<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dutyEmployeeControler extends Controller
{
    //
    function loadDutyEmployeeView()
    {
        return view("Duty_Employee.DeDashboard");
    }
    function loadDutyScheduleView()
    {
        return view("Duty_Employee.DeWeekSchedule");
    }
    function loadE_ChalanView()
    {
        return view("Duty_Employee.DeEchalan");
    }
}
