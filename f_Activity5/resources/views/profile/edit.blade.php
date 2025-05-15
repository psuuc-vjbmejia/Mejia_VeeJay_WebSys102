<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Profile</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="container">
        <header>
            <h1>{{ config('app.name', 'Laravel') }}</h1>
            <nav>
                <span>Welcome, {{ Auth::user()->name }}!</span>
                <a href="{{ route('dashboard') }}" class="button">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout">Log Out</button>
                </form>
            </nav>
        </header>
        <main>
            <div class="card">
                <h2>Profile</h2>
                <div class="section">
                    <h3>Update Profile Information</h3>
                    @include('profile.partials.update-profile-information-form')
                </div>
                <div class="section">
                    <h3>Update Password</h3>
                    @include('profile.partials.update-password-form')
                </div>
                <div class="section">
                    <h3>Delete Account</h3>
                    @include('profile.partials.delete-user-form')
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
        .button {
            background: #00ff00;
            color: #000;
            padding: 10px 18px;
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
            max-width: 800px;
            width: 100%;
        }
        h2 {
            font-size: 28px;
            font-weight: 700;
            color: #fff;
            text-align: center;
            margin-bottom: 24px;
        }
        h3 {
            font-size: 22px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 16px;
        }
        .section {
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
        input[type="text"],
        input[type="email"],
        input[type="password"] {
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
        input[type="text"]:focus,
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
        button, [type="submit"] {
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
        button:hover, [type="submit"]:hover {
            background: #00cc00;
            box-shadow: 0 0 16px rgba(0, 255, 0, 0.7);
        }
        .danger {
            background: #ff0000;
            box-shadow: 0 0 12px rgba(255, 0, 0, 0.5);
        }
        .danger:hover {
            background: #cc0000;
            box-shadow: 0 0 16px rgba(255, 0, 0, 0.7);
        }
    </style>
</body>
</html>