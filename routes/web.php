<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;

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
Route::get('/department',[DepartmentController::class,'index']);
Route::get('/employee',[EmployeeController::class,'index']);
Route::get('/create_employee',[EmployeeController::class,'addview']);
Route::post('/create_employee',[EmployeeController::class,'create_employee']);


Route::get('/', function () {
    return view('welcome');
});
