<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function (){
   //Suppliers
   Route::get('suppliers/index', [SupplierController::class, 'index'])->name('suppliers.index');
   Route::get('suppliers/create', [SupplierController::class, 'create'])->name('suppliers.create');
   Route::post('suppliers/store', [SupplierController::class, 'store'])->name('suppliers.store');
   Route::get('suppliers/{supplier}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
   Route::put('suppliers/{supplier}/update', [SupplierController::class, 'update'])->name('suppliers.update');
   Route::get('suppliers/{supplier}/destroy', [SupplierController::class, 'destroy'])->name('suppliers.destroy');
});

require __DIR__.'/auth.php';
