<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('BBINCO/Device/Reboot/' ,[DeviceController::class, 'rebootDevice']);
Route::get('BBINCO/Device/LogRead/' ,[DeviceController::class, 'logRead']);