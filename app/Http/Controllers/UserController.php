<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view("dashboard.users")->with(["users"=>User::all()]);
    }

    public function AddUser(){
        return view("dashboard.add-users");
    }
    public function logout(){
        Auth::logout();
        return redirect("/");
    }
    public function delete(Request $req){
        User::find($req['id'])->delete();
    }
    
}
