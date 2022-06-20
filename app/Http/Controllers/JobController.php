<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobs(){
        //return "this is jobs";
        return view("home.jobs");
    }
}
