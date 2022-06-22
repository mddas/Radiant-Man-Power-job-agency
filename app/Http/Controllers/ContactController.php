<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Session;

class ContactController extends Controller
{
 
   public function contact(){
       return view("home.contact");
   }
   public function index(){//this is for admin
        return view("dashboard.contact")->with(["contacts"=>Contact::all()]);
    }
    public function add(){
        return view("dashboard.add-contact");
    }
    public function store(Request $req){
         $validated = $req->validate([
        'title' => 'required',
        'contents' => 'required',
        ]);
         //dd($req);
       if($req->file('manager_image')){
                //return($req->file('image'));
                $file= $req->file('manager_image');
                $imagename = date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/images/contact'), $imagename);
       }
       else{
           
           $imagename=null;
       }
       //return $company_image.":[]:".$job_image;
       $about = Contact::updateOrCreate(
            ['id' => $req['id']],
            [
            'title'=>$req['title'],
            'contents'=>$req['contents'],
            'manager_name'=>$req['manager_name'],
            'manager_photo'=>$imagename,
            
        ]);
        Session::flash('message', 'Inserted Successfully'); 
        Session::flash('alert-success', 'success');

        return redirect("/admin/add-about");
        //return Category::all(); 
    }
    public function delete(){
        return "delete";
    }
    public function edit(){
        return "edit";
    }
}
