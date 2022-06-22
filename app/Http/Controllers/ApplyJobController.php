<?php

namespace App\Http\Controllers;
use App\Models\ApplyJob;
use Illuminate\Http\Request;
use Session;
use Auth;
use Validator;

class ApplyJobController extends Controller
{
    public function index(){
        //$applied_job = ApplyJob::find('15');
        //return $applied_job->getJobDetail->name;
        return view("dashboard.applied-job")->with(['applied_jobs'=>ApplyJob::all()]);
    }
    public function apply(Request $req){
     $validated = $req->validate([
        'job_id' => 'required',
        'number'=>'required',
        'name'=>'required',
        'email'=>'required',
        ]);
     if(Auth::check()==1){
         $user_id = Auth::user()->id;
     }
     else{
         $user_id = "null";
     }
       $about = ApplyJob::updateOrCreate(
            ['job_id' => $req['job_id'],
             'number'=> $req['number']
            ],
            [
            'user_id'=>$user_id,
            'name'=>$req['name'],
            'email'=>$req['email'],
            'bio'=>$req['bio'],
            'address'=>$req['address'],            
        ]);
        Session::flash('message', 'job apply Successfully'); 
        Session::flash('alert-success', 'success');

        return redirect("/");
        //return Category::all(); 
    }
    public function delete(Request $req){
        ApplyJob::find($req['id'])->delete();
    }
}
