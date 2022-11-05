<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youssef extends Controller
{
    public function youssefinfo(){
        $data['name']='Youssef El ARABI';
        $data['age']=20;
        $data['classe']='DSI';
        
        $obj = new \stdClass();
        $obj -> name = 'Youssef';
        $obj -> Age = 20;


        $ar=['a'=>'Ahmed','b'=>'Nabil'];

        return view('youssef',compact('obj'),compact('ar'))-> with($data);
    }
}
