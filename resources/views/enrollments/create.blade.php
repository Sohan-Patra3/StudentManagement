@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Enrollments</div>
        <div class="card-body">
            <form action="{{ route('enrollments.store') }}" method="POST">
                @csrf
                <label for="enrollments no">Enrollment No</label>
                <input type="text" name="enroll_no" class="form-control"><br>
                <label for="batch_id">Batch ID</label>
                <input type="number" name="batch_id" class="form-control"><br>
                <label for="student_id">Student ID</label>
                <input type="number" name="student_id" class="form-control"><br>
                <label for="join_date">Join Date</label>
                <input type="date" name="join_date" class="form-control"><br>
                <label for="fee">Fee</label>
                <input type="number" name="fee" class="form-control"><br>
                <input type="submit" value="Save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
