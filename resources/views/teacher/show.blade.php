@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Contact Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name : {{ $techer->name }}</h5>
                <p class="card-text">Address : {{ $techer->address }}</p>
                <p class="card-text">Mobile : {{ $techer->mobile }}</p>
            </div>
        </div>
    </div>
@endsection
