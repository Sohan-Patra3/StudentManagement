@extends('layout')
@section('content')
    <div class="card-header">
        <h2>Student Management</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus">Add New</i></a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($students as $item)
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->Address }}</td>
                            <td>{{ $item->mobile }}</td>
                            <td>
                                <a href="{{ url('/student' . '/' . $item->id) }}"><button
                                        class="btn btn-info">View</button></a>
                                <a href="{{ url('/student' . '/' . $item->id . '/edit') }}"><button
                                        class="btn btn-primary">Edit</button></a>
                                <form action="" method="POST">


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
