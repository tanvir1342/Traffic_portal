<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tpdutyController extends Controller
{
    public function em_list()
    {
        $student = array();

        for($i=0; $i<8; $i++){
            $student = array(
                "name" => "Student " . ($i+1),
                "id" =>($i+1)

            );
            $students[] = (object)$student; 
        }
   
        return view('tp_dashboard.duty')->with('empolye', $students);
       
    }

    public function generate()
    {
        $student = array();

        for($i=0; $i<2; $i++){
            $student = array(
                "name" => "Student " . ($i+1),
                "id" =>($i+1)

            );
            $students[] = (object)$student; 
            $em_id = rand(1,16);
        }
   
        return $students;
       
    }
}
