<?php


use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/form', [FormController::class, 'showForm']) -> name('Form');
Route::post('/form', [FormController::class, 'handleForm']);

