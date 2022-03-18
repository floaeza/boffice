<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('BBINCO/Device/Reboot/' ,[DeviceController::class, 'rebootDevice']);
Route::get('BBINCO/Device/Terminal/' ,[DeviceController::class, 'terminalDevice']);
