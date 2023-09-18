<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AdressController;

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
    return redirect(route('dashboard'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::get('/animals/{animal}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
Route::get('/animals/{animal}', [AnimalController::class, 'show'])->name('animals.show');
Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');
Route::put('/animals/{animal}', [AnimalController::class, 'update'])->name('animals.update');
Route::delete('/animals/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');

Route::get('/owners', [OwnerController::class, 'index'])->name('owners.index');
Route::get('/owners/create', [OwnerController::class, 'create'])->name('owners.create');
Route::get('/owners/{owner}/edit', [OwnerController::class, 'edit'])->name('owners.edit');
Route::get('/owners/{owner}', [OwnerController::class, 'show'])->name('owners.show');
Route::post('/owners', [OwnerController::class, 'store'])->name('owners.store');
Route::put('/owners/{owner}', [OwnerController::class, 'update'])->name('owners.update');
Route::delete('/owners/{owner}', [OwnerController::class, 'destroy'])->name('owners.destroy');


require __DIR__.'/auth.php';
