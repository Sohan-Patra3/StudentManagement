@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Batches Page</div>
        <div class="card-body">
            <form action="{{ route('batches.store') }}" method="POST">
                @csrf
                <label for="name">Batch name</label>
                <input type="text" name="name" class="form-control"><br>

                <label for="courseid">Course</label>
                {{-- <input type="number" name="course_id" class="form-control"><br> --}}
                <select name="course_id" id="course_id" class="form-control">
                    @foreach ($courses as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select><br>

                <label for="startdate">start date</label>
                <input type="date" name="start_date" class="form-control"><br>
                <input type="submit" value="Save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
