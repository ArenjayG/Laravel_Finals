<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use App\Http\Controllers\employeemanagement;



Route::get('employees', [employeemanagement::class, 'index']);
>>>>>>> 7311e1f24ccdfbd8c0d1244988015706445a9dd0

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

<<<<<<< HEAD
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
=======
    Route::get('employee/{id}/edit', [employeemanagement::class, 'edit'])->name('employee.edit');
    Route::patch('employee/{id}', [employeemanagement::class, 'update'])->name('employee.update');
    Route::delete('employee/{id}', [employeemanagement::class, 'destroy'])->name('employee.destroy');
    Route::get('/employee', [employeemanagement::class, 'index'])->name('employee.index');
    Route::post('/employee', [employeemanagement::class, 'store'])->name('employee.store');
    
    
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
>>>>>>> 7311e1f24ccdfbd8c0d1244988015706445a9dd0
