@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">
            <form action="{{ route('courses.update', $courses->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" id="id" value="{{ $courses->id }}">
                <label for="">Name</label>
                <input type="text" name="name" id="name" value="{{ $courses->name }}" class="form-control"><br>
                <label for="">Syllabus</label>
                <input type="text" name="syllabus" id="syllabus" value="{{ $courses->syllabus }}"
                    class="form-control"><br>
                <label for="">Duration</label>
                <input type="text" name="duration" id="duration" value="{{ $courses->duration }}"
                    class="form-control"><br>
                <input type="submit" value="update" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
