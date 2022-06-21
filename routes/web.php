<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SlidderController;



 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// this is for index
Route::get('/' ,[HomeController::class,'index']);
Route::get('/jobs',[JobController::class,'jobs']);
Route::get('/admin',[AdminController::class,'index']);
Route::get('comming-soon', function () {
    return view('comming-soon/comming-soon');
});

//Backend
Route::get('admin/job',[JobController::class,'index']);
Route::get('admin/form-job',[JobController::class,'form']);
Route::post('admin/add-job',[JobController::class,'AddJob']);
Route::get('admin/delete-job',[JobController::class,'delete']);


Route::get('admin/users',[UserController::class,'index']);
Route::get('admin/add-users',[UserController::class,'AddUser']);

Route::get("admin/category",[CategoryController::class,'index']);
Route::get("admin/delete-category",[CategoryController::class,'delete']);
Route::post("admin/add-category",[CategoryController::class,'Add']);

Route::get("admin/subcategory",[SubCategoryController::class,'index']);
Route::post("admin/add-subcategory",[SubCategoryController::class,'Add']);
Route::get("admin/delete-subcategory",[SubCategoryController::class,'delete']);

//contact
Route::get('/contact',[ContactController::class,'contact']);//frontend
Route::get("admin/contact",[ContactController::class,'index']);//backend
Route::get("admin/add-contact",[ContactController::class,'add']);
Route::post("admin/store-contact",[ContactController::class,'store']);
Route::get("admin/delete-contact",[ContactController::class,'delete']);
Route::get("admin/edit-contact",[ContactController::class,'edit']);


//about us
Route::get('/about-us',[AboutController::class,'about']);//frontend
Route::get("admin/about",[AboutController::class,'index']);
Route::get("admin/add-about",[AboutController::class,'add']);
Route::post("admin/store-about",[AboutController::class,'store']);
Route::get("admin/delete-about",[AboutController::class,'delete']);
Route::get("admin/edit-about",[AboutController::class,'edit']);

//blog
Route::get('/blog',[BlogController::class,'blog']);//frontend
Route::get("admin/blog",[BlogController::class,'index']);
Route::get("admin/add-blog",[BlogController::class,'add']);
Route::get("admin/delete-blog",[BlogController::class,'delete']);
Route::get("admin/edit-blog",[BlogController::class,'edit']);

//slidder
Route::get("admin/slidder",[SlidderController::class,'index']);
Route::get("admin/add-slidder",[SlidderController::class,'add']);
Route::get("admin/delete-slidder",[SlidderController::class,'delete']);
Route::get("admin/edit-slidder",[SlidderController::class,'edit']);








require __DIR__.'/auth.php';
