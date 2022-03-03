<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function (){
    Route::get('/dashboard', [\App\Http\Controllers\HomeController::class,'home']);
    Route::get('user-profile', [\App\Http\Controllers\UserController::class ,'userProfile'])->name('user.profile');
    Route::get('send', [\App\Http\Controllers\TransactionControlller::class ,'send'])->name('transfer.send');
    Route::get('receive', [\App\Http\Controllers\TransactionControlller::class ,'receive'])->name('transfer.receive');


});
