<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerLaika extends Controller
{
    //   
     public function panel(){
        return view('administrator/panel');
    }

    public function reports(){
        return view('administrator/reports');
    }
    
}
