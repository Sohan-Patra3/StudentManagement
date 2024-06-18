@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Contact Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Enrollment No : {{ $enrollments->enroll_no }}</h5>
                <h5 class="card-title">Batch ID : {{ $enrollments->batch_id }}</h5>
                <h5 class="card-title">Student ID : {{ $enrollments->student_id }}</h5>
                <h5 class="card-title">Join Date : {{ $enrollments->join_date }}</h5>
                <h5 class="card-title">Fee : {{ $enrollments->fee }}</h5>
            </div>
        </div>
    </div>
@endsection
