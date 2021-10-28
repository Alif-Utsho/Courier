<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\AgentController;


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
})->name('home');


// Auth Routes
Route::get('/login', [AuthController::class, 'loginGetController'])->name('login.get')->middleware('authMiddleware');
Route::post('/login', [AuthController::class, 'loginPostController'])->name('login.post')->middleware('authMiddleware');

Route::get('/registration', [AuthController::class, 'registrationGetController'])->name('registration.get')->middleware('authMiddleware');
Route::post('/registration', [AuthController::class, 'registrationPostController'])->name('registration.post')->middleware('authMiddleware');

Route::get('/signout', [AuthController::class, 'signout'])->name('sign.out');


// Admin Routes
Route::get('/admin', [AdminController::class, 'adminGetController'])->name('admin.get')->middleware('authMiddleware');

// Branch
Route::post('/branchadd', [BranchController::class, 'branchAddController'])->name('branch.add');
Route::post('/branchupdate', [BranchController::class, 'branchUpdate'])->name('branch.update');
Route::post('/branchdelete', [BranchController::class, 'branchDelete'])->name('branch.delete');

// Agent
Route::post('/staffadd', [AgentController::class, 'staffaddController'])->name('staff.add');
Route::post('/staffupdate', [AgentController::class, 'staffUpdate'])->name('staff.update');
Route::post('/staffdelete', [AgentController::class, 'staffDelete'])->name('staff.delete');
