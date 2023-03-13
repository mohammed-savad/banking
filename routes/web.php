<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BankController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [BankController::class, 'dashboard'])->name('dashboard');


    Route::get('/statment', [BankController::class, 'statment'])->name('statment');
    Route::get('/withdraw', [BankController::class, 'withdraw'])->name('withdraw');
    Route::get('/transfer', [BankController::class, 'transfer'])->name('transfer');
    Route::get('/deposit', [BankController::class, 'deposit'])->name('deposit');
    Route::post('/deposit_store', [BankController::class, 'store'])->name('deposit_store');
    Route::post('/store_withdraw', [BankController::class, 'store_withdraw'])->name('store_withdraw');
    Route::post('/store_tranfer', [BankController::class, 'store_tranfer'])->name('store_tranfer');


});

require __DIR__.'/auth.php';
