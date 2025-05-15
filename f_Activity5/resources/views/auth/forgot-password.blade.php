<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="container">
        <div class="card">
            <h2>Forgot Password</h2>
            <p class="intro">Enter your email address and we will send you a link to reset your password.</p>
            @if (session('status'))
                <div class="success">{{ session('status') }}</div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-actions">
                    <button type="submit">{{ __('Email Password Reset Link') }}</button>
                </div>
            </form>
        </div>
    </div>
    <style>
        body {
            background: linear-gradient(135deg, #6b00ff, #00b7ff);
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #fff;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 450px;
            padding: 20px;
        }
        .card {
            background: #1a1a1a;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            padding: 40px;
            width: 100%;
            box-sizing: border-box;
        }
        h2 {
            font-size: 28px;
            font-weight: 700;
            color: #fff;
            text-align: center;
            margin-bottom: 16px;
        }
        .intro {
            font-size: 16px;
            color: #ddd;
            text-align: center;
            margin-bottom: 24px;
        }
        .success {
            color: #00ff00;
            font-size: 16px;
            text-align: center;
            margin-bottom: 16px;
        }
        .form-group {
            margin-bottom: 24px;
        }
        label {
            display: block;
            font-size: 16px;
            font-weight: 500;
            color: #ddd;
            margin-bottom: 10px;
        }
        input[type="email"] {
            width: 100%;
            padding: 14px;
            border: 1px solid #444;
            border-radius: 8px;
            background: #ffffff;
            font-size: 18px;
            color: #000;
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        input[type="email"]:focus {
            border-color: #00ff00;
            box-shadow: 0 0 8px rgba(0, 255, 0, 0.3);
            outline: none;
        }
        .error {
            color: #ff4d4d;
            font-size:astebin.com/14px;
            font-weight: 500;
            margin-top: 6px;
            display: block;
        }
        .form-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 32px;
        }
        button {
            background: #00ff00;
            color: #000;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s, box-shadow 0.3s;
            box-shadow: 0 0 12px rgba(0, 255, 0, 0.5);
        }
        button:hover {
            background: #00cc00;
            box-shadow: 0 0 16px rgba(0, 255, 0, 0.7);
        }
    </style>
</body>
</html>