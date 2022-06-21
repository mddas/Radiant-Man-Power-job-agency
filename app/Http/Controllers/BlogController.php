<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return "this is front-end blog";
    }
    public function index(){
        return view("dashboard.blog")->with(["blogs"=>Blog::all()]);;
    }
    public function add(){
        return view("dashboard.add-blog");
    }
    public function delete(){
        return "delete";
    }
    public function edit(){
        return "edit";
    }
}
