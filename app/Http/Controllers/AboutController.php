<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return "this is frontend";
    }
    public function index(){
        return view("dashboard.about")->with(["abouts"=>About::all()]);
    }
    public function add(){
        return view("dashboard.add-about");
    }
    public function delete(){
        return "delete";
    }
    public function edit(){
        return "edit";
    }
}
