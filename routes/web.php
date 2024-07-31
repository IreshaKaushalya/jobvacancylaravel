<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;



Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//ADMIN 
Route::get('/add_job_view',[AdminController::class,'addview']);

Route::post('/upload_jobs',[AdminController::class,'upload']);

Route::get('/showapplications',[AdminController::class,'showapplications']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/cancel/{id}',[AdminController::class,'cancel']);

Route::get('/all_jobs',[AdminController::class,'all_jobs']);

Route::get('/deletejob/{id}',[AdminController::class,'deletejob']);

Route::get('/updatejob/{id}',[AdminController::class,'updatejob']);

Route::post('/editjobs/{id}',[AdminController::class,'editjobs']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

Route::get('/add_clientphoto',[AdminController::class,'add_clientphoto']);

Route::post('/upload_companypho',[AdminController::class,'upload_companypho']);




//USER
Route::post('/application',[HomeController::class,'application']);

Route::get('/myapplication',[HomeController::class,'myapplication']);

Route::get('/cancel_applica/{id}',[HomeController::class,'cancel_applica']);

Route::get('/jobvarcancy',[HomeController::class,'jobvarcancy']);

Route::post('/contact', [HomeController::class, 'contact'])->name('contact.submit');

Route::get('/service_details',[HomeController::class,'service_details']);

Route::get('/contact', [HomeController::class, 'contact']);

