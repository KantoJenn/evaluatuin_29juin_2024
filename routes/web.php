<?php

use App\Http\Controllers\AuthController;
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

// Route pour se connecter en tant que client
Route::get('/login/client', [AuthController::class, 'showClientLoginForm'])->name('login.client');

// Route pour se connecter en tant qu'admin
Route::get('/login/admin', [AuthController::class, 'showAdminLoginForm'])->name('login.admin');

// Route pour se connecter en tant que vendeur
Route::get('/login/proprio', [AuthController::class, 'showProprioLoginForm'])->name('login.proprio');
