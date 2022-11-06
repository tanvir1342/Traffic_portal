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
        $a=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16);

        $random_keys=array_rand($a,12);

        $duty = array(
            "morningperson1"=>$a[$random_keys[0]],
            "morningperson2"=>$a[$random_keys[1]],
            "morningperson3"=>$a[$random_keys[2]],
            "morningperson4"=>$a[$random_keys[3]],
            "afternoonperson1"=>$a[$random_keys[4]],
            "afternoonperson2"=>$a[$random_keys[5]],
            "afternoonperson3"=>$a[$random_keys[6]],
            "afternoonperson4"=>$a[$random_keys[7]],
            "night1"=>$a[$random_keys[8]],
            "night2"=>$a[$random_keys[9]],
            "night3"=>$a[$random_keys[10]],
            "night4"=>$a[$random_keys[11]],
        ); 
      
        
        return $duty;
       
    }
}
