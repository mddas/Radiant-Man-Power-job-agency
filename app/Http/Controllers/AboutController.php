<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;
use Session;

class AboutController extends Controller
{
    public function about(){
        return view("home.about-us");
    }
    public function index(){
        return view("dashboard.about")->with(["abouts"=>About::all()]);
    }
    public function add(){
        return view("dashboard.add-about");
    }
    public function store(Request $req){
        

        $validated = $req->validate([
        'title' => 'required',
        'contents' => 'required',
        'image' => 'required',
        'feature'=>'required',
        ]);
         //dd($req);
       if($req->file('image')){
                //return($req->file('image'));
                $file= $req->file('image');
                $imagename = date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('about'), $imagename);
       }
       else{
           
           $imagename=null;
       }
       //return $company_image.":[]:".$job_image;
       $about = About::updateOrCreate(
            ['id' => $req['id']],
            [
            'title'=>$req['title'],
            'contents'=>$req['contents'],
            'feature'=>$req['feature'],
            'image'=>$imagename,
            
        ]);
        Session::flash('message', 'Inserted Successfully'); 
        Session::flash('alert-success', 'success');

        return redirect("/admin/add-about");
        //return Category::all(); 
    }
    public function delete(Request $req){
        About::find($req['id'])->delete();
    }
    public function edit(){
        return "edit";
    }
}
