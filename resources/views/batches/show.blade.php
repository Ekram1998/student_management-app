@extends('layout')
@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">Batch Page</div>
            <div class="card-body">
                <h5 class="card-title">Name : {{ $batches->name }}</h5>
                <p class="card-text">Course : {{ $batches->course->name }}</p>
                <p class="card-text">Start Date : {{ $batches->start_date }}</p>

            </div>
        </div>
    </div>
@endsection
