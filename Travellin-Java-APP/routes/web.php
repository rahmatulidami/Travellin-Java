<?php

use App\Http\Controllers\LandingController;
use App\Providers\Filament\AdminPanelProvider;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [LandingController::class, 'index'])->name('landing');

// profile
Route::middleware('auth')->group(function() {
    Route::get('/Testimoni/create', [LandingController::class, 'create'])->name('landing.create');
    Route::post('/Testimoni', [LandingController::class, 'store'])->name('landing.store');
});

// Show detail product
Route::get('/Travels/detail/{id}', [LandingController::class, 'detail'])->name('landing.detail');
Route::get('/page', [LandingController::class, 'show'])->name('landing.page');

// Search product
Route::get('/search', [LandingController::class, 'find'])->name('landing.find');

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');



// Auth::routes();
