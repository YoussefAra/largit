<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landing extends Controller
{
    public function landingshow(){
        return view('landing');
    }
}
