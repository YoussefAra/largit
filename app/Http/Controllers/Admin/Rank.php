<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class Rank extends Controller
{
    public function first(){
        return 'The first rank is iron';
    }
    public function second(){
        return 'The second rank is bronz';
    }
    public function third(){
        return 'The third rank is silver';
    }
}
