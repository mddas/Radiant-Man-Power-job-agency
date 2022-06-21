<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;


 


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
Route::get('/about-us',[AboutUsController::class,'aboutus']);
Route::get('/blog',[BlogController::class,'blog']);
Route::get('/contact',[ContactController::class,'contact']);
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



require __DIR__.'/auth.php';
