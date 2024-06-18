@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">
            <form action="{{ route('batches.update', $batches->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" id="id" value="{{ $batches->id }}">
                <label for="">Name</label>
                <input type="text" name="name" id="name" value="{{ $batches->name }}" class="form-control"><br>
                <label for="">Course id</label>
                <input type="number" name="courseid" id="course_id" value="{{ $batches->course_id }}"
                    class="form-control"><br>
                <label for="">Start Date</label>
                <input type="date" name="startdate" id="start_date" value="{{ $batches->start_date }}"
                    class="form-control"><br>
                <input type="submit" value="update" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
