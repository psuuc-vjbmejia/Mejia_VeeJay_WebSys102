@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Upcoming Events - {{ Carbon\Carbon::now()->format('F Y') }}</h1>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($events->isEmpty())
            <p>No Upcoming Events found for this month.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Speaker</th>
                        <th>Schedule</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->speaker ?? 'No Speaker' }}</td>
                            <td>{{ $event->schedule }}</td>
                            <td>
                                <a href="{{ route('events.show', $event) }}" class="btn btn-info">View</a>
                                <a href="{{ route('events.edit', $event) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('events.destroy', $event) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                @if ($event->speaker)
                                    <form action="{{ route('events.update', $event) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="title" value="{{ $event->title }}">
                                        <input type="hidden" name="description" value="{{ $event->description }}">
                                        <input type="hidden" name="speaker" value="">
                                        <input type="hidden" name="schedule" value="{{ $event->schedule }}">
                                        <button type="submit" class="btn btn-delete-speaker">Delete Speaker</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection