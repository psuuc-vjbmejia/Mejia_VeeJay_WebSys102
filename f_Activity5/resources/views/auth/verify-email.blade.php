<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Verify Email</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="container">
        <header>
            <h1>{{ config('app.name', 'Laravel') }}</h1>
            <nav>
                <span>Welcome, {{ Auth::user()->name }}!</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout">Log Out</button>
                </form>
            </nav>
        </header>
        <main>
            <div class="card">
                <h2>Verify Your Email Address</h2>
                <p class="intro">A verification link has been sent to your email address. Please check your inbox and click the link to verify your email.</p>
                @if (session('status') == 'verification-link-sent')
                    <div class="success">{{ __('A new verification link has been sent to your email address.') }}</div>
                @endif
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div class="form-actions">
                        <button type="submit">{{ __('Resend Verification Email') }}</button>
                    </div>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="form-actions">
                        <button type="submit" class="logout">{{ __('Log Out') }}</button>
                    </div>
                </form>
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
        nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        nav span {
            font-size: 18px;
            font-weight: 500;
            color: #ddd;
        }
        .logout {
            background: #ff0000;
            color: #fff;
            padding: 10px 18px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s, box-shadow 0.3s;
            box-shadow: 0 0 12px rgba(255, 0, 0, 0.5);
        }
        .logout:hover {
            background: #cc0000;
            box-shadow: 0 0 16px rgba(255, 0, 0, 0.7);
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
        .intro {
            font-size: 18px;
            color: #ddd;
            margin-bottom: 24px;
        }
        .success {
            color: #00ff00;
            font-size: 16px;
            margin-bottom: 16px;
        }
        .form-actions {
            display: flex;
            justify-content: center;
            margin-top: 32px;
        }
        button {
            background: #00ff00;
            color: #000;
            padding: 14px 28px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s, box-shadow 0.3s;
            box-shadow: 0 0 12px rgba(0, 255, 0, 0.5);
        }
        button:hover {
            background: #00cc00;
            box-shadow: 0 0 16px rgba(0, 255, 0, 0.7);
        }
        .logout {
            background: #ff0000;
            box-shadow: 0 0 12px rgba(255, 0, 0, 0.5);
        }
        .logout:hover {
            background: #cc0000;
            box-shadow: 0 0 16px rgba(255, 0, 0, 0.7);
        }
    </style>
</body>
</html>