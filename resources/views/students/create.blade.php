@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Student Page</div>
        <div class="card-body">
            <form action="{{ url('student') }}" method="POST">
                @csrf
            </form>
        </div>
    </div>
