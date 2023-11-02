<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/course',function(){
//     return view('course_view');
// });
// Route::get('/courseadd',function(){
//     return view('course_add');
// });


Route::get('/admin',[LoginController::class,'login']);
 
Route::post('/logincheck',[LoginController::class,'logincheck']);

Route::get('index',[LoginController::class,'indexpage']);

Route::resource('course',CourseController::class);

Route::resource('faculty',FacultyController::class);

Route::resource('internship',InternshipController::class);

Route::get('/',[FrontEndController::class,'frontindex']);

Route::get('/about',[FrontEndController::class,'about']);

Route::get('/faculties',[FrontEndController::class,'faculty']);

Route::get('/courses',[FrontEndController::class,'courses']);

Route::get('/gallery',[FrontEndController::class,'gallery']);

Route::get('/contact',[FrontEndController::class,'contact']);

Route::get('/register',[FrontEndController::class,'register']);

Route::get('/subcrs_create',[CourseController::class,'subcrs_create']);

Route::post('/subcrs_store',[CourseController::class,'subcrs_store']);

Route::get('/editcode/{id}',[CourseController::class,'subcrs_editt']);

Route::patch('/subcrs_update/{id}',[CourseController::class,'subcrs_update']);

Route::delete('/subcrs_delete/{id}',[CourseController::class,'subcrs_delete']);

Route::get('/subcrs_view',[CourseController::class,'subcrs_view']);

Route::resource('registration',RegistrationController::class);

Route::post('registeruser',[RegistrationController::class,'store']);



