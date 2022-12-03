<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientHomeController;
use App\Http\Controllers\{AdminHomeController, AuthController, RoleController, UserController};


Route::get('/',HomeController::class)->name('home');

Route::controller(AuthController::class)->prefix('login')->group(function () {
    Route::get('/','login')->name('login');
    Route::post('/store','store')->name('login.store');
});

Route::get('/logout',[AuthController::class,'logout'])->middleware('admin')->name('logout');

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard',[AdminHomeController::class,'index'])->name('admin.home');

    Route::controller(UserController::class)->name('users.')->group(function () {
        Route::get('/view-users','view')->name('view')->middleware('can:View users');
        Route::get('/add-user','add')->name('add')->middleware('can:Add users');
        Route::post('/store-user','store')->name('store')->middleware('can:Add users');
        Route::get('/edit-profile','editProfile')->name('profile');
        Route::get('/edit-user/{id}','edit')->name('edit')->middleware('can:Edit users');
        Route::put('/update-user/{id}','update')->name('update')->middleware('can:Remove users');
        Route::delete('/delete-user/{id}','delete')->name('delete')->middleware('can:Remove users');
    });

    Route::controller(RoleController::class)->name('roles.')->group(function () {
        Route::get('/view-roles','view')->name('view')->middleware('can:View roles');
        Route::get('/add-roler','add')->name('add')->middleware('can:Add roles');
        Route::post('/store-role','store')->name('store')->middleware('can:Add roles');
        Route::get('/edit-role/{id}','edit')->name('edit')->middleware('can:Edit roles');
        Route::put('/update-role/{id}','update')->name('update')->middleware('can:Edit roles');
        Route::delete('/delete-role/{id}','delete')->name('delete')->middleware('can:Remove roles');
    });
});

Route::prefix('client')->middleware('admin')->group(function () {
    Route::get('/home',[ClientHomeController::class,'index'])->name('client.home');
});

Route::get('lang/{local}',function($locale){
    if(in_array($locale,['en','ar']))
    session()->put('locale',$locale);
    return redirect()->back();
})->name('lang');