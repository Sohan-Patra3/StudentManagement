@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Student Page</div>
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"><br>
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control"><br>
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" class="form-control"><br>
                <input type="submit" value="Save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
