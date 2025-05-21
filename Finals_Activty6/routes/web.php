<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/weather', [WeatherController::class, 'getWeather']);
Route::get('/weathers', [WeatherController::class, 'showMultiCityWeather']);

Route::get('/news', [NewsController::class, 'getNews']);
Route::get('/newss', [NewsController::class, 'showNews']);
