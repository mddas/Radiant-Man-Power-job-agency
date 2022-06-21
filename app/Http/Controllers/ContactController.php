<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
 
   public function contact(){
       return "this is frontend contact";
   }
   public function index(){//this is for admin
        return view("dashboard.contact")->with(["contacts"=>Contact::all()]);
    }
    public function add(){
        return view("dashboard.add-contact");
    }
    public function delete(){
        return "delete";
    }
    public function edit(){
        return "edit";
    }
}
