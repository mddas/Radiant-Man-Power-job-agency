<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Session;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view("dashboard.subcategory")->with(["categories"=>Category::all(),"subcategories"=>SubCategory::all()]);;
    }
    public function Add(Request $req){
        //dd($req);
        $validated = $req->validate([
        'name' => 'required',
         'category_id'=> 'required',
        ]);
       if($req->file('image')){
                //return($req->file('image'));
                $file= $req->file('image');
                $name = date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('category'), $name);
       }
       else{
           $name=null;
       }
       $category = SubCategory::updateOrCreate(
            ['id' => $req['id']],
            [
            'name'=>$req['name'],
            'image'=>$name,
            'category_id'=>$req['category_id'],
        ]);
        Session::flash('message', 'Inserted Successfully'); 
        Session::flash('alert-success', 'success');
        return redirect("/admin/subcategory");
        //return Category::all();        
    }
    public function delete(Request $req){
        $category = SubCategory::find($req['id'])->delete();
        return redirect("/admin/subcategory");
    }
}
