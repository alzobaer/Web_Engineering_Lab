<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/create', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/edit/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::post('/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
