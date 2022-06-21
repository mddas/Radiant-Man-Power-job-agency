<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Job;


use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobs(){
        //return "this is jobs";
        return view("home.jobs");
    }
    public function index(){
        return view("dashboard.job")->with(["jobs"=>job::all()]);
    }
    public function form(){
        return view("dashboard.add-job")->with(["categories"=>Category::all(),"subcategories"=>SubCategory::all()]);
    }
    public function AddJob(Request $req){


        $validated = $req->validate([
        'name' => 'required',
        'job_description' => 'required',
        'qualification' => 'required',
        'salary'=>'required',
        'country'=>'required',
        'company_name'=>'required',
        ]);
         //dd($req);
       if($req->file('job_image')){
                //return($req->file('image'));
                $file= $req->file('job_image');
                $job_image = date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('job_image'), $job_image);
       }
       else{
           
           $job_image=null;
       }
       if($req->file('company_image')){
                $file= $req->file('company_image');
                $company_image = date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('job_image'), $company_image);
       }
       else{
                $company_image = null;
       }
       //return $company_image.":[]:".$job_image;
       $job = Job::updateOrCreate(
            ['id' => $req['id']],
            [
            'name'=>$req['job_name'],
            'job_description'=>$req['job_description'],
            'qualification'=>$req['qualification'],
            'salary'=>$req['salary'],
            'country'=>$req['country'],
            'company_name'=>$req['company_name'],
            'company_image'=>$company_image,
            'job_image'=>$job_image,
            'number_of_required_post'=>$req['number_of_required_post'],
            'category_id'=>$req['category_id'],
            'subcategoryr_id'=>$req['subcategory_id'],
        ]);
        Session::flash('message', 'Inserted Successfully'); 
        Session::flash('alert-success', 'success');

        return redirect("/admin/form-job");
        //return Category::all();        
    }
    public function delete(Request $req){
        Job::find($req['id'])->delete();
    }


}
