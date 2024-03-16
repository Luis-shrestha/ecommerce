<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ViewRecordController;
use App\Http\Controllers\ViewMessageController;
use App\Http\Controllers\UserEditController;
// use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;




Route::get('/cartmade', function () {
    return view('cartmade');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('logout', function () {
    auth()->logout();
    Session::forget('user');
    return redirect('login');
});
Route::group(['middleware'=>"web"],function(){
    Route::post('/register',[UserController::class,'store'])->name('register');

    Route::get('login', function () {
        return view('login');
    });

    Route::post('/login',[UserController::class,'login'])->name('login');
    Route::get('/logout',[UserController::class,'logout'])->name('logout');


});


Route::group(['middleware'=>"web"],function(){
    Route::post('/cartmade',[MessageController::class,'store'])->name('cartmade');
});

Route::get('/admin/userprofile', [ViewRecordController::class, 'index'])->name('ViewRecord');
Route::get('/admin/message', [ViewMessageController::class, 'index'])->name('ViewMessage');





//=--=-=-=-=-=-=-=-=-=-=-=admin=-=-=-=-=-=-=-=-=-=-=-=-=-=
Route::get('adminlogout', function () {
    auth()->logout();
    Session::forget('user');
    return redirect('amdin.adminlogin');
});
Route::get('/admin/adminregister', function () {
    return view('admin.adminregister');
});
Route::group(['middleware'=>"web"],function(){

    Route::post('/admin/adminlogin',[AdminController::class,'adminlogin'])->name('adminlogin');
    Route::post('/admin/adminregister',[AdminController::class,'adminstore'])->name('adminregister');
    Route::get('/admin/adminlogin', function () {
        return view('admin.adminlogin');
    });
});
Route::post('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});


// Route::get('admin/edit/{id}','UserEditController@show');
Route::get('/admin/edit/{id}', [UserEditController::class, 'show']);
Route::post('/admin/update/{id}', [UserEditController::class, 'update']);

// Route::post('/update/{id}','UserEditController@update');


Route::get('/admin/delete/{id}',[UserEditController::class,'delete']);