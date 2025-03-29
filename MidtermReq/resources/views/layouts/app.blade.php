<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        body {
            background-color: #E6F0FA;
            margin: 0;
            font-family: 'Georgia', 'Times New Roman', Times, serif;
            display: flex;
        }
        .sidebar {
            width: 200px;
            background-color: #4682B4;
            color: #ffffff;
            height: 100vh;
            position: fixed;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar h2 {
            font-size: 1.8em;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }
        .sidebar a {
            display: block;
            color: #ffffff;
            text-decoration: none;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #3A6D9A;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }
        h1 {
            color: #4682B4;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2.5em;
            font-weight: bold;
        }
        .alert-success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            padding: 15px;
            margin: 20px 0;
            color: #155724;
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin: 5px;
        }
        .btn-primary { 
            background-color: #4682B4; 
            color: #ffffff; 
        }
        .btn-primary:hover { 
            background-color: #3A6D9A; 
        }
        .btn-info { 
            background-color: #20B2AA; 
            color: #ffffff; 
        }
        .btn-info:hover {
            background-color: #1A9992; 
        }
        .btn-warning { 
            background-color: #F7C948; 
            color: #2F4F4F; 
        }
        .btn-warning:hover { 
            background-color: #E0B133; 
        }
        .btn-danger { 
            background-color: #FF6347; 
            color: #ffffff; 
            border: none; 
            cursor: pointer; 
        }
        .btn-danger:hover {
            background-color: #E5533D; 
        }
        .btn-delete-speaker { 
            background-color: #FF6F61; 
            color: #ffffff; 
            padding: 8px 15px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            font-weight: bold; 
            transition: background-color 0.3s ease;
            margin: 5px; 
            }
        .btn-delete-speaker:hover { 
            background-color: #E85A4F; 
        }
        .btn-secondary { 
            background-color: #6c757d; 
            color: #ffffff; 
        }
        .btn-secondary:hover { 
            background-color: #5a6268; 
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
        }
        .table thead {
             background-color: #4682B4; 
             color: #ffffff; 
            }
        .table th { 
            padding: 15px; 
            text-align: center; 
            font-weight: bold; 
        }
        .table tbody tr { 
            border-bottom: 1px solid #dfe6e9; 
            text-align: center; 
        
        }
        .table td { 
            padding: 15px; 
            color: #2F4F4F; 

        }
        .table tbody tr:hover { 
            background-color: #f8fafc; 
        }
        p { 
            text-align: center; 
            color: #2F4F4F; 
            font-size: 1.2em; 
            margin: 20px 0; }
        .container { 
            max-width: 1200px; 
            margin: 0 auto; 
            padding: 0 20px; }
        @media (max-width: 768px) {
            .sidebar { width: 200px; }
            .content { margin-left: 200px; width: calc(100% - 200px); }
            h1 { font-size: 2em; }
            .container { padding: 0 15px; }
            .table th, .table td { padding: 10px; }
            .btn { padding: 8px 15px; font-size: 0.9em; }
            .btn-delete-speaker { padding: 6px 12px; font-size: 0.9em; }
        }
        @media (max-width: 576px) {
            .sidebar { width: 100%; height: auto; position: relative; }
            .content { margin-left: 0; width: 100%; }
        }
    </style>
</head>
<body>
<div class="sidebar">
    <h2>Event Manager</h2>
    <a href="{{ route('events.index') }}">All Events</a>
    <a href="{{ route('events.upcoming') }}">Upcoming Events</a>
    <a href="{{ route('events.create') }}">Create Event</a>
</div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>