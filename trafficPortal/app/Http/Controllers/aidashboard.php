<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aidashboard extends Controller
{
    public function dutyEmployeProfile($idd)
    {
        $trafficpoint = array();
        $user = array();
        

        for($i=0; $i<5; $i++){
            $trafficpoint = array(
                "name" => "Traffic Point " . ($i+1),
                "id" =>($i+1)

            );
            $trafficpoints[] = (object)$trafficpoint; 
        }
        foreach($trafficpoints as $trafficpoints){
            if($idd == $trafficpoints->id){
                $user = array(
                    "name" =>  $trafficpoints->name,
                    "id" => $trafficpoints->id
    
                );
                
            }
        }
        $user_[] = (object)$user; 
        return $user_;

    }

    public function index()
    {
        $trafficpoint = array();

        for($i=0; $i<8; $i++){
            $trafficpoint = array(
                "name" => "Traffic Point " . ($i+1),
                "id" =>($i+1)

            );
            $trafficpoints[] = (object)$trafficpoint; 
        }
   
        return view('area_incharge.aiDashboard')->with('trafficpoint', $trafficpoints);

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
