<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Session;

class CategoryController extends Controller
{
    public function index(){
        return view("dashboard.category")->with(["categories"=>Category::all()]);
    }

    public function Add(Request $req){
        $validated = $req->validate([
        'name' => 'required',
        ]);
        //dd($req);
       if($req->file('image')){
                //return($req->file('image'));
                $file= $req->file('image');
                $name = date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('category'), $name);
       }
       else{
           $file=null;
       }
       $category = Category::updateOrCreate(
            ['id' => $req['id']],
            [
            'name'=>$req['name'],
            'image'=>$file,
        ]);

        Session::flash('message', 'Inserted Successfully'); 
        Session::flash('alert-success', 'success');

        return redirect("/admin/category");
        //return Category::all();        
    }
    public function delete(Request $req){
        $category = Category::find($req['id'])->delete();
        return redirect("/admin/category");
    }
}
