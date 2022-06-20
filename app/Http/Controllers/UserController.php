<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view("dashboard.users");
    }

    public function AddUser(){
        return view("dashboard.add-users");
    }
}
