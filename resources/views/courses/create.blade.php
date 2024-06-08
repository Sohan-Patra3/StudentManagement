@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Courses Page</div>
        <div class="card-body">
            <form action="{{ route('courses.store') }}" method="POST">
                @csrf
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"><br>
                <label for="syllabus">syllabus</label>
                <input type="text" name="syllabus" class="form-control"><br>
                <label for="duration">duration</label>
                <input type="text" name="duration" class="form-control"><br>
                <input type="submit" value="Save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
