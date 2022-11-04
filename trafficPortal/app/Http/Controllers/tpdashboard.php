<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tpdashboard extends Controller
{
    public function dutyEmployeProfile($idd)
    {
        $student = array();
        $user = array();
        

        for($i=0; $i<5; $i++){
            $student = array(
                "name" => "Student " . ($i+1),
                "id" =>($i+1)

            );
            $students[] = (object)$student; 
        }
        foreach($students as $students){
            if($idd == $students->id){
                $user = array(
                    "name" =>  $students->name,
                    "id" => $students->id
    
                );
                
            }
        }
        $user_[] = (object)$user; 
        return $user_;

    }

    public function index()
    {
        $student = array();

        for($i=0; $i<8; $i++){
            $student = array(
                "name" => "Student " . ($i+1),
                "id" =>($i+1)

            );
            $students[] = (object)$student; 
        }
   
        return view('tp_dashboard.tpDashboard')->with('empolye', $students);

    }
}
