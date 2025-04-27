@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Add Student</h1>

        <div class="mb-3">
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Records</a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">First name</label>
                        <input type="text" name="firstname" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Last name</label>
                        <input type="text" name="lastname" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Student ID</label>
                        <input type="text" name="studentID" placeholder="00-ur-0000" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Course</label>
                        <select name="course" id="">
                            <option value="BS Information Technology">BS Information Technology</option>
                            <option value="AB English Language">AB English Language</option>
                            <option value="BS Civil Engineering">BS Civil Engineering</option>
                            <option value="BS Electrical Engineering">BS Electrical Engineering</option>
                            <option value="BS Mechanical Engineering">BS Mechanical Engineering</option>
                            <option value="BS Computer Engineering">BS Computer Engineering</option>
                            <option value="BS Mathematics">BS Mathematics</option>
                            <option value="BS Architecture">BS Architecture</option>
                            <option value="Bachelor of Early Childhood Education">Bachelor of Early Childhood Education</option>
                            <option value="Bachelor of Secondary Education">Bachelor of Secondary Education</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="yearlevel" class="form-label">Year Level</label>
                        <select name="yearlevel" id="">
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add student</button>
                </form>
            </div>
        </div>
    </div>
@endsection