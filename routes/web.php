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
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ApplyJobController;




 


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
Route::get('/admin',[AdminController::class,'index'])->middleware(['auth']);
Route::get('comming-soon', function () {
    return view('comming-soon/comming-soon');
});

//Backend
//job
Route::get('job-details',[JobController::class,'jobDetail']);//frontend
Route::get('admin/job',[JobController::class,'index'])->middleware(['auth']);
Route::get('admin/form-job',[JobController::class,'form'])->middleware(['auth']);
Route::post('admin/add-job',[JobController::class,'AddJob'])->middleware(['auth']);
Route::get('admin/delete-job',[JobController::class,'delete'])->middleware(['auth']);


Route::get('admin/users',[UserController::class,'index'])->middleware(['auth']);
Route::get('admin/add-users',[UserController::class,'AddUser'])->middleware(['auth']);

Route::get("admin/category",[CategoryController::class,'index'])->middleware(['auth']);
Route::get("admin/delete-category",[CategoryController::class,'delete'])->middleware(['auth']);
Route::post("admin/add-category",[CategoryController::class,'Add'])->middleware(['auth']);

Route::get("admin/subcategory",[SubCategoryController::class,'index'])->middleware(['auth']);
Route::post("admin/add-subcategory",[SubCategoryController::class,'Add'])->middleware(['auth']);
Route::get("admin/delete-subcategory",[SubCategoryController::class,'delete'])->middleware(['auth']);

//contact
Route::get('/contact',[ContactController::class,'contact']);//frontend
Route::get("admin/contact",[ContactController::class,'index'])->middleware(['auth']);//backend
Route::get("admin/add-contact",[ContactController::class,'add'])->middleware(['auth']);
Route::post("admin/store-contact",[ContactController::class,'store'])->middleware(['auth']);
Route::get("admin/delete-contact",[ContactController::class,'delete'])->middleware(['auth']);
Route::get("admin/edit-contact",[ContactController::class,'edit'])->middleware(['auth']);


//about us
Route::get('/about-us',[AboutController::class,'about']);//frontend
Route::get("admin/about",[AboutController::class,'index'])->middleware(['auth']);
Route::get("admin/add-about",[AboutController::class,'add'])->middleware(['auth']);
Route::post("admin/store-about",[AboutController::class,'store'])->middleware(['auth']);
Route::get("admin/delete-about",[AboutController::class,'delete'])->middleware(['auth']);
Route::get("admin/edit-about",[AboutController::class,'edit'])->middleware(['auth']);

//blog
Route::get('/blog',[BlogController::class,'blog']);//frontend
Route::get("admin/blog",[BlogController::class,'index'])->middleware(['auth']);
Route::get("admin/add-blog",[BlogController::class,'add'])->middleware(['auth']);
Route::get("admin/delete-blog",[BlogController::class,'delete'])->middleware(['auth']);
Route::get("admin/edit-blog",[BlogController::class,'edit'])->middleware(['auth']);

//slidder
Route::get("admin/slidder",[SlidderController::class,'index'])->middleware(['auth']);
Route::get("admin/add-slidder",[SlidderController::class,'add'])->middleware(['auth']);
Route::get("admin/delete-slidder",[SlidderController::class,'delete'])->middleware(['auth']);
Route::get("admin/edit-slidder",[SlidderController::class,'edit'])->middleware(['auth']);

//messages
Route::get("admin/message",[MessageController::class,'index'])->middleware(['auth']);
Route::post("admin/store-message",[MessageController::class,'store'])->middleware(['auth']);
Route::get("admin/add-message",[MessageController::class,'add'])->middleware(['auth']);
Route::get("admin/delete-message",[MessageController::class,'delete'])->middleware(['auth']);
Route::get("admin/edit-message",[MessageController::class,'edit'])->middleware(['auth']);

//Apply to job
Route::get("apply",[ApplyJobController::class,'apply']);
Route::get("/admin/applied-job",[ApplyJobController::class,'index']);
Route::get("/admin/delete-applied-job",[ApplyJobController::class,'delete']);


//logout
Route::get("/logout",[UserController::class,'logout']);

//user
Route::get("admin/delete-user",[UserController::Class,'delete']);








require __DIR__.'/auth.php';
