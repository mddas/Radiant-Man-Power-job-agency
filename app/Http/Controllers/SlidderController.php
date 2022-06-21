<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlidderController extends Controller
{
     public function index(){
        return "this is index";
    }
    public function add(){
        return "this is add";
    }
    public function delete(){
        return "delete";
    }
    public function edit(){
        return "edit";
    }
}
