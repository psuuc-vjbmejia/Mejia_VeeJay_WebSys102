<?php


use App\Http\Controllers\CalculationController;

 Route::get('/{operator1}/{value1}/{value2}/{operator2}/{value3}/{value4}',
 [CalculationController::class, 'compute']);


