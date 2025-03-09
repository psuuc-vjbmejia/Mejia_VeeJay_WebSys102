<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/stud_view', [StudentController::class, 'index']);
Route::post('/stud_view',[StudentController::class, 'insert']);





Route::get('edit-record', [StudentController::class, 'index']);
Route::get('edit/{id}', [StudentController::class, 'show']);
Route::post('edit/{id}', [StudentController::class, 'edit']);

Route::get('delete/{id}', [StudentController::class, 'delete']);