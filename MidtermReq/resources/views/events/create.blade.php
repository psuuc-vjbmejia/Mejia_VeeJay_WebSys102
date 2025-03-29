@extends('layouts.app')

<style>

body {
    background-color: #E6F0FA; 
    margin: 0;
    font-family: 'Georgia', 'Times New Roman', Times, serif;

}

h1 {
    color: #4682B4;
    text-align: center;
    margin-bottom: 20px;
    font-size: 3em;
    font-weight: 800;
    padding-top: 20px;
}

.container {
    max-width: 800px;
    margin: 30px auto;
    padding: 0 20px;
}

.alert-danger {
    background-color: #fce4e4;
    border: 1px solid #fcc2c3;
    border-radius: 4px;
    padding: 15px;
    margin: 20px 0;
    color: #cc3333;
}

.alert-danger ul {
    margin: 0;
    padding-left: 20px;
}

.alert-danger li {
    margin: 5px 0;
}

form {
    background-color: #ffffff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
}

label {
    display: block;
    margin: 15px 0 5px;
    color: #2F4F4F;
    font-weight: 500;
}

input[type="text"],
input[type="datetime-local"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #dfe6e9;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px;
    background-color: #f8fafc;
}

textarea {
    height: 120px;
    resize: vertical;
}

input:focus,
textarea:focus {
    outline: none;
    border-color: #20B2AA;
    box-shadow: 0 0 5px rgba(32, 178, 170, 0.3);
}

button[type="submit"] {
    background-color: #FF6347;
    color: #ffffff;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    margin-top: 25px;
    font-size: 16px;
    font-weight: 500;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #E5533D;
}

@media (max-width: 768px) {
    .container {
        padding: 0 15px;
        margin: 20px auto;
    }
    
    header h1 {
        font-size: 1.5em;
    }
    
    form {
        padding: 20px;
    }
}
</style>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
    <header>
        <h1>Create Event</h1>
    </header>
    
    <div class="container">
        <form action="{{ route('events.store') }}" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" required>
                    
            <label for="description">Description:</label>
            <textarea name="description" required></textarea>
                    
            <label for="speaker">Speaker Name:</label>
            <input type="text" name="speaker" required>
                    
            <label for="schedule">Schedule:</label>
            <input type="datetime-local" name="schedule" required>
                    
            <label for="attendee">Attendee:</label>
            <input type="text" name="attendee">
                    
            <button type="submit">Create Event</button>
        </form>
    </div>
@endsection