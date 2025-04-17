<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/',[HomeController::class,'index']);

Route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/add_doc',[AdminController::class,'upload']);

Route::post('/appointment',action: [HomeController::class,'appointment']);

Route::get('/myappointment',action: [HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',action: [HomeController::class,'cancel_appoint']);

Route::get('/show_appointment',[AdminController::class,'show_appointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/cancelled/{id}',[AdminController::class,'cancelled']);

Route::get('/show_doctor',[AdminController::class,'show_doctor']);

Route::get('/delete_doctor/{id}',[AdminController::class,'delete_doctor']);

Route::get('/update_doctor/{id}',[AdminController::class,'update_doctor']);

Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);



// use App\Http\Controllers\LoginController;
// Route::get('/redirect', [LoginController::class, 'redirect'])->name('redirect');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
