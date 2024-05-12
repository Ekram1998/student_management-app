@extends('layout')
@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">Teacher Page</div>
            <div class="card-body">
                <h5 class="card-title">Name : {{ $teacher->name }}</h5>
                <p class="card-text">Address : {{ $teacher->address }}</p>
                <p class="card-text">Mobile : {{ $teacher->mobile }}</p>

            </div>
        </div>
    </div>
@endsection
