<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi', [SessionController::class, 'login']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);

Route::get('/', function () {
    return view('welcome');
});

Route::post('/add-user', [UserController::class, 'store'])->name('add-user.store');
Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('update-profile');
Route::delete('/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('delete-user');

// Rute untuk admin
Route::middleware([RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/dashboard-admin', function () {
        return view('admin.dashboard-admin');
    })->name('dashboard-admin');

    Route::get('/add-user', function () {
        return view('admin.add-user');
    })->name('add-user');

    Route::get('/list-user', [AdminController::class, 'listUsers'])->name('list-user');
});

Route::middleware([RoleMiddleware::class . ':user'])->group(function () {
    Route::get('/dashboard-user', function () {
        return view('user.dashboard-user');
    })->name('dashboard-user');

    Route::get('/kalender', function () {
        return view('user.kalender');
    })->name('kalender');

    Route::get('/tips&trik', function () {
        return view('user.tips&trik');
    })->name('tips-trik');

    Route::get('/setting', function () {
        return view('user.setting');
    })->name('setting');
});
