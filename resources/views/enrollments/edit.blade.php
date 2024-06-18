@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">
            <form action="{{ route('enrollments.update', $enrollments->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" id="id" value="{{ $enrollments->id }}">
                <label for="">Enrollment No</label>
                <input type="text" name="enroll_no" id="name" value="{{ $enrollments->enroll_no }}"
                    class="form-control"><br>
                <label for="">Batch ID</label>
                <input type="number" name="batch_id" id="" value="{{ $enrollments->batch_id }}"
                    class="form-control"><br>
                <label for="">Student ID</label>
                <input type="number" name="student_id" id="" value="{{ $enrollments->student_id }}"
                    class="form-control"><br>

                <label for="">Join Date</label>
                <input type="date" name="join_date" class="form-control" value="{{ $enrollments->join_date }}"><br>

                <label for="">Fee</label><br>
                <input type="number" name="fee" class="form-control" value="{{ $enrollments->fee }}"><br>
                <input type="submit" value="update" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
