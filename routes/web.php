<?php

use App\Http\Controllers\Admin\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\First;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Teacher\Teacher;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    Auth::logout();
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

//Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function () {
    Route::get('/dashboard',[Admin::class,'index'])->name('admin.dashboard');  
    Route::get('/first-student',[Admin::class,'first'])->name('first.student');  
    Route::get('/second-student',[Admin::class,'second'])->name('second.student');  
    Route::get('/third-student',[Admin::class,'third'])->name('third.student');  
    Route::get('/four-student',[Admin::class,'four'])->name('four.student');  
    Route::get('/five-student',[Admin::class,'five'])->name('five.student'); 
    Route::post('/destroy/{id}', [Admin::class, 'destroy'])->name('admin.destroy');
    Route::post('/book_status/{id}', [Admin::class, 'changeStatus'])->name('admin.book_status');
    Route::post('/application_status/{id}', [Admin::class, 'changeStatus'])->name('admin.app_status');
    Route::get('/edit/{id}', [Admin::class, 'show'])->name('admin.show');
    Route::post('/edit/{id}', [Admin::class, 'edit'])->name('admin.edit');
    Route::get('/view/{id}', [Admin::class, 'viewDocument'])->name('admin.view');
 
});

//Teacher
Route::group(['prefix' => 'teacher', 'middleware' => ['auth','role:teacher']], function () {
    Route::get('/dashboard',[Teacher::class,'index'])->name('teacher.dashboard');  
    Route::get('/first-students',[Admin::class,'first'])->name('first.students');  
    Route::get('/second-students',[Admin::class,'second'])->name('second.students');  
    Route::get('/third-students',[Admin::class,'third'])->name('third.students');  
    Route::get('/four-students',[Admin::class,'four'])->name('four.students');  
    Route::get('/five-students',[Admin::class,'five'])->name('five.students'); 
    Route::post('/book_status/{id}', [Admin::class, 'changeStatus'])->name('admin.book_status');
    Route::post('/application_status/{id}', [Admin::class, 'changeStatus'])->name('admin.app_status');
    Route::get('/edits/{id}', [Admin::class, 'showTeacher'])->name('teacher.show');
    Route::post('/edits/{id}', [Teacher::class, 'edit'])->name('teacher.edit');
    Route::get('/views/{id}', [Admin::class, 'viewDocument'])->name('teacher.view');
});


Route::get('first',function(){
    $count = Student::count();
    return view('first',compact('count'));
})->name('first.page');
Route::get('second',function(){
    $count = Student::count();
    return view('second',compact('count'));
})->name('second.page');
Route::get('third',function(){
    $count = Student::count();
    return view('third',compact('count'));
})->name('third.page');
Route::get('four',function(){
    $count = Student::count();
    return view('four',compact('count'));
})->name('four.page');
Route::get('five',function(){
    $count = Student::count();
    return view('five',compact('count'));
})->name('five.page');

Route::post('first',[First::class,'store'])->name('first');
Route::post('second',[First::class,'store'])->name('second');
Route::post('third',[First::class,'store'])->name('third');
Route::post('four',[First::class,'store'])->name('four');
Route::post('five',[First::class,'store'])->name('five');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
