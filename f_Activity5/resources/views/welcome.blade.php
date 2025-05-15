<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta ch
    arset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="container">
        <header>
            <h1>{{ config('app.name', 'Laravel') }}</h1>
        </header>
        <main>
            <div class="card">
                <h2>Welcome</h2>
                <p>Join us today or sign in to access your account.</p>
                <div class="actions">
                    <a href="{{ route('login') }}" class="button">Log In</a>
                    <a href="{{ route('register') }}" class="button">Register</a>
                </div>
            </div>
        </main>
    </div>
    <style>
        body {
            background: linear-gradient(135deg, #6b00ff, #00b7ff);
            font-family: 'Roboto', sans-serif;
            margin: 0;
            color: #fff;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: #1a1a1a;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }
        h1 {
            font-size: 28px;
            font-weight: 700;
            color: #fff;
            margin: 0;
        }
        main {
            display: flex;
            justify-content: center;
        }
        .card {
            background: #1a1a1a;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 600px;
            width: 100%;
            text-align: center;
        }
        h2 {
            font-size: 28px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 16px;
        }
        p {
            font-size: 18px;
            color: #ddd;
            margin-bottom: 24px;
        }
        .actions {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .button {
            background: #00ff00;
            color: #000;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.3s, box-shadow 0.3s;
            box-shadow: 0 0 12px rgba(0, 255, 0, 0.5);
        }
        .button:hover {
            background: #00cc00;
            box-shadow: 0 0 16px rgba(0, 255, 0, 0.7);
        }
    </style>
</body>
</html>