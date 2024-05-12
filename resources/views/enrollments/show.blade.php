@extends('layout')
@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">Courses Page</div>
            <div class="card-body">
                <h5 class="card-title">Enrollment Number : {{ $enrollments->id }}</h5>
                <p class="card-text">Batch : {{ $enrollments->batch->name }}</p>
                <p class="card-text">Student : {{ $enrollments->student->name }}</p>
                <p class="card-text">Join Date : {{ $enrollments->join_date }}</p>
                <p class="card-text">Course Fee : {{ $enrollments->fee }}</p>

            </div>
        </div>
    </div>
@endsection
