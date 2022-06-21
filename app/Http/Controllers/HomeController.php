<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Job;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //$category = Category::find("6");
        //return $category;
        //return $category->getSubcategory;
        return view('home.index')->with(["categories"=>Category::all(),"jobs"=>Job::all()]);
    }
}
