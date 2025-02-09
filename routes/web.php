<?php

// yg ni automatic
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// panggil dia balik
use App\Http\Controllers\ExpenseController;

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
});

// kena tambah yang ni 
Route::resource('expenses', ExpenseController::class);
Route::get('expenses/summary', [ExpenseController::class, 'summary'])
    ->name('expenses.summary');

require __DIR__.'/auth.php';
