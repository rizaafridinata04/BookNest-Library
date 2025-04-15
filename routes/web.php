<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\WelcomeController;

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

// ====HALAMAN USER===
Route::get('/welcome', function () {
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



// ====HALAMAN ADMIN====

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [adminController::class, 'index'])->name('adminDashboard');
});

require __DIR__.'/auth.php';

Route::get('/admin', function () {
    return view('admin.adminDashboard');
});

Route::get('/admin/users', function () {
    $users = User::all();
    return view('users', compact('users'));
});



Route::get('/', [WelcomeController::class, 'index']);
