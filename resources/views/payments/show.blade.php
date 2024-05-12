@extends('layout')
@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">Payment Page</div>
            <div class="card-body">
                <h5 class="card-title">Enrollment ID : {{ $payments->enrollment_id }}</h5>
                <p class="card-text">paid Date : {{ $payments->paid_date }}</p>
                <p class="card-text">Amount of Course : {{ $payments->amount }}</p>

            </div>
        </div>
    </div>
@endsection
