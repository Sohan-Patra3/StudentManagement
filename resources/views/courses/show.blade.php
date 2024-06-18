@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Contact Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name : {{ $courses->name }}</h5>
                <h5 class="card-title">syllabus : {{ $courses->syllabus }}</h5>
                <h5 class="card-title">Duration : {{ $courses->duration() }}</h5>
            </div>
        </div>
    </div>
@endsection
