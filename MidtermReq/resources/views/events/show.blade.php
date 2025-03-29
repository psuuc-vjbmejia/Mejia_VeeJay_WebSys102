@extends('layouts.app')

<style>

body {
    background-color: #E6F0FA;
    margin: 0;
    font-family: 'Georgia', 'Times New Roman', Times, serif;

}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
}

h1 {
    color: #4682B4;
    text-align: center;
    margin-bottom: 30px;
    font-size: 3em;
    font-weight: 800;
}

.event-card {
    background-color: #ffffff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
    border-left: 5px solid #4682B4;
}

.event-card h2 {
    color: #2F4F4F;
    margin-top: 0;
    margin-bottom: 20px;
    font-size: 1.8em;
    font-weight: 600;
}

.event-card p {
    color: #2F4F4F;
    margin: 10px 0;
    font-size: 1.1em;
    line-height: 1.5;
}

.event-card p strong {
    color: #4682B4;
    font-weight: 600;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 500;
    transition: background-color 0.3s ease;
    margin: 5px;
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

.btn-secondary {
    background-color: #20B2AA;
    color: #ffffff;
}

.btn-secondary:hover {
    background-color: #1A9992;
}

@media (max-width: 768px) {
    .container {
        padding: 0 15px;
    }
    
    h1 {
        font-size: 2em;
    }
    
    .event-card {
        padding: 20px;
    }
    
    .event-card h2 {
        font-size: 1.5em;
    }
    
    .event-card p {
        font-size: 1em;
    }
    
    .btn {
        padding: 8px 15px;
        font-size: 0.9em;
    }
}
</style>

@section('content')
    <div class="container">
        <h1>Event Details</h1>

        <div class="event-card">
            <h2>{{ $event->title }}</h2>
            <p><strong>Description:</strong> {{ $event->description }}</p>
            <p><strong>Speaker:</strong> {{ $event->speaker }}</p>
            <p><strong>Schedule:</strong> {{ $event->schedule }}</p>
            <p><strong>Attendee:</strong> {{ $event->attendee }}</p>
        </div>

        <a href="{{ route('events.edit', $event) }}" class="btn btn-warning">Edit Event</a>
        <form action="{{ route('events.destroy', $event) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Event</button>
        </form>
        <a href="{{ route('events.index') }}" class="btn btn-secondary">Back to Events</a>
    </div>
@endsection