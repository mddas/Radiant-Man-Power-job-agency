<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Job;
use App\Models\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $total_users = User::all()->count();
        $applyed_clients = Job::all()->count();
        $total_message = Message::all()->count();
        $total_jobs = Job::all()->count();;
        $total_empty_post = 213;

        return view("dashboard.index")->with(["total_users"=>$total_users,"applyed_clients"=>$applyed_clients,"total_message"=>$total_message,"total_jobs"=>$total_jobs,"total_empty_post"=>$total_empty_post]);
    }
    
}
