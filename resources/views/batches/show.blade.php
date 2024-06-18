@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Contact Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Batch Name : {{ $batches->name }}</h5>
                <h5 class="card-title">Course : {{ $batches->course->name }}</h5>
                <h5 class="card-title">Start Date : {{ $batches->start_date }}</h5>
            </div>
        </div>
    </div>
@endsection
