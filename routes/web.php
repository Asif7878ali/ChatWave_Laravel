<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FuncnalityController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Load Home Page
Route::view('/','pages.home.welcome');
Route::view('/user/log','pages.auth.loginform')->name('page.login');

//Registration Route
Route::controller(UserController::class)->group(function(){
   Route::get('/auth/user/signin', 'create')->name('user.create');
   Route::post('/auth/user/signin', 'store')->name('user.store');
});

//Authtication Route
Route::controller(AuthController::class)->group(function(){ 
    Route::post('/auth/login', 'login')->name('login');
    // Route::post('/auth/logout', 'Logout')->name('logout');
});
//SearchUser
Route::get('/search', [FuncnalityController::class, 'searchuser'])->name('user.search');