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
}
