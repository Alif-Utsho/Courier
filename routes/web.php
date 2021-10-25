<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Auth Routes
Route::get('/login', [AuthController::class, 'loginGetController'])->name('login.get');
Route::post('/login', [AuthController::class, 'loginPostController'])->name('login.post');

Route::get('/registration', [AuthController::class, 'registrationGetController'])->name('registration.get');
Route::post('/registration', [AuthController::class, 'registrationPostController'])->name('registration.post');