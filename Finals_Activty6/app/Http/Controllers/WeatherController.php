<?php

// File: app/Http/Controllers/WeatherController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        $city = $request->query('city', 'London'); // Default to London as per requirement
        $apiKey = env('WEATHER_API_KEY');

        if (!$apiKey) {
            Log::error('Weather API key not configured');
            return response()->json(['error' => 'Weather API key not configured'], 500);
        }

        $client = new Client();
        $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";

        try {
            $response = $client->get($url);
            $data = json_decode($response->getBody(), true);

            return response()->json([
                'city' => $city,
                'temperature' => $data['main']['temp'],
                'description' => $data['weather'][0]['description'],
                'humidity' => $data['main']['humidity']
            ]);
        } catch (RequestException $e) {
            $errorMessage = $e->hasResponse() ? $e->getResponse()->getBody()->getContents() : $e->getMessage();
            Log::error("Failed to fetch weather data for city {$city}: {$errorMessage}");
            return response()->json(['error' => 'Could not fetch weather data'], 500);
        }
    }

    public function showMultiCityWeather()
    {
        $cities = ['London', 'Australia', 'Canada'];
        $weatherData = [];

        $client = new Client();
        $apiKey = env('WEATHER_API_KEY');

        foreach ($cities as $city) {
            $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";
            try {
                $response = $client->get($url);
                $data = json_decode($response->getBody(), true);
                $weatherData[$city] = [
                    'temperature' => $data['main']['temp'],
                    'description' => $data['weather'][0]['description'],
                    'humidity' => $data['main']['humidity']
                ];
            } catch (RequestException $e) {
                Log::error("Failed to fetch weather data for city {$city}: " . $e->getMessage());
                $weatherData[$city] = ['error' => 'Could not fetch weather data'];
            }
        }

        return view('weather.multi-city', compact('weatherData'));
    }
}