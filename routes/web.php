<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard-admin', function () {
    return view('admin.dashboard-admin');
});

Route::get('add-user', function () {
    return view('admin.add-user');
});

Route::get('/dashboard-user', function () {
    return view('user.dashboard-user');
});

Route::get('/list-user', function () {
    return view('user.list-user');
});

Route::get('/kalender', function () {
    return view('user.kalender');
});

Route::get('/tips&trik', function () {
    return view('user.tips&trik');
});

Route::get('/setting', function () {
    return view('setting');
});

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi', [SessionController::class, 'login']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);
