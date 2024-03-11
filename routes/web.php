<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SaleProposalController;
use App\Http\Controllers\SaleDetailController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // THE BEST ROUTES
    Route::resource('client', [ClientController::class]);
    Route::resource('clientType', [ClientTypeController::class]);
    Route::resource('saleProposal', [SaleProposalController::class]);
    Route::resource('saleDetail', [SaleDetailController::class]);
    Route::resource('product', [ProductController::class]);
    Route::resource('alert', [AlertController::class]);
});

require __DIR__.'/auth.php';
