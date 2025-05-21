<!-- File: resources/views/weather/multi-city.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-City Weather</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: #d4d4d4;
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .row {
            display: flex;
            justify-content: space-between;
        }
        .weather-column {
            flex: 1;
            padding: 20px;
            text-align: center;
            min-width: 0; /* Prevents overflow issues */
        }
        .city-name {
            color: #569cd6;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .weather-info {
            color: #d4d4d4;
            font-size: 1.2rem;
            line-height: 1.5;
        }
        .weather-info span {
            color: #ce9178;
        }
        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }
            .weather-column {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach($weatherData as $city => $data)
                <div class="weather-column">
                    @if (isset($data['error']))
                        <p class="text-danger">{{ $data['error'] }}</p>
                    @else
                        <div class="city-name">{{ $city }}</div>
                        <div class="weather-info">
                            temperature: <span>{{ $data['temperature'] }}°C</span><br>
                            description: <span>{{ $data['description'] }}</span><br>
                            humidity: <span>{{ $data['humidity'] }}%</span>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>