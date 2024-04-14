<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SaleProposalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AlertController;
use App\Models\SaleProposal;
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

Route::get('/dashboard', function() {
        return redirect('/main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('main', function() {
        return view('main');
    });
    
    Route::resource('clients', ClientController::class);
    Route::resource('clients.saleProposals', SaleProposalController::class);
    Route::get('saleProposals/selection/{state}', [SaleProposalController::class, 'specificSalesListing']);
    Route::get('saleProposals', [SaleProposalController::class, 'allSaleProposals']);
    Route::resource('products', ProductController::class);
    Route::resource('alerts', AlertController::class);
});

require __DIR__.'/auth.php';
