<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminJobController extends Controller
{
    public function index(){
        return view("dashboard.job");
    }
    public function AddJob(){
        return view("dashboard.add-job");
    }
}
