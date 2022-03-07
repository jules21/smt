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

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();
Route::middleware('auth')->group(function (){
    Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
    Route::get('user-profile', [\App\Http\Controllers\UserController::class ,'userProfile'])->name('user.profile');
    Route::get('transfer', [\App\Http\Controllers\TransactionController::class,'sendMoneyForm'])->name('transactions.transfer.form');
    Route::post('transfer', [\App\Http\Controllers\TransactionController::class,'transfer'])->name('transactions.transfer');
    Route::get('transactions', [\App\Http\Controllers\TransactionController::class ,'allTransactions'])->name('transactions.all');

//    Route::get('check-account',[\App\Http\Controllers\TransactionController::class,'checkAccountAmount'])->name('transactions.check-account');


});
