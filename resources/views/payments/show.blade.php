@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Contact Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Enrollment Id : {{ $payments->enrollment->enroll_no }}</h5>
                <h5 class="card-title">Batch ID : {{ $payments->paid_date }}</h5>
                <h5 class="card-title">Student ID : {{ $payments->amount }}</h5>
            </div>
        </div>
    </div>
@endsection
