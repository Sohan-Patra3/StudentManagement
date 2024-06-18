@extends('layout')
@section('content')
    <div class="card-header">
        <h2>enrollments Management</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus">Add New</i></a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enrollments No</th>
                        <th>Batch Id</th>
                        <th>Student</th>
                        <th>Joining date</th>
                        <th>Fee</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($enrollments as $item)
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->enroll_no }}</td>
                            <td>{{ $item->batch->name }}</td>
                            <td>{{ $item->student->name }}</td>
                            <td>{{ $item->join_date }}</td>
                            <td>{{ $item->fee }}</td>
                            <td>
                                <a href="{{ url('/enrollments' . '/' . $item->id) }}"><button
                                        class="btn btn-info">View</button></a>
                                <a href="{{ url('/enrollments' . '/' . $item->id . '/edit') }}"><button
                                        class="btn btn-primary">Edit</button></a>
                                <form action="{{ route('enrollments.destroy', $item->id) }}" method="POST" class="mt-1">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
