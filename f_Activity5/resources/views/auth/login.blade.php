<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="container">
        <div class="card">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="checkbox">
                        <input type="checkbox" name="remember"> {{ __('Remember me') }}
                    </label>
                </div>
                <div class="form-actions">
                    <div class="links">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                        @endif
                        <a href="{{ route('register') }}">{{ __('Don’t have an account? Register here') }}</a>
                    </div>
                    <button type="submit">{{ __('Log in') }}</button>
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
            margin-bottom: 32px;
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
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 14px;
            border: 1px solid #444;
            border-radius: 8px;
            background: #2a2a2a;
            font-size: 18px;
            color: #fff;
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #00ff00;
            box-shadow: 0 0 8px rgba(0, 255, 0, 0.3);
            outline: none;
        }
        .error {
            color: #ff4d4d;
            font-size: 14px;
            font-weight: 500;
            margin-top: 6px;
            display: block;
        }
        .checkbox {
            display: flex;
            align-items: center;
            font-size: 16px;
            color: #ddd;
        }
        .checkbox input {
            margin-right: 10px;
        }
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 32px;
        }
        .links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        a {
            color: #00ff00;
            text-decoration: none;
            font-size: 9px;
            font-weight: 500;
        }
        a:hover {
            text-decoration: underline;
            color: #00cc00;
        }
        button {
            background: #00ff00;
            color: #000;
            padding: 14px 28px;
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