<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TypeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('building', BuildingController::class);
Route::resource('training', TrainingController::class);
Route::resource('type', TypeController::class);
Route::resource('student', StudentController::class);

