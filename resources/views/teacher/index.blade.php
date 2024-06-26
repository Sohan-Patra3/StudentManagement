@extends('layout')
@section('content')
    <div class="card-header">
        <h2>teacher Management</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/teacher/create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus">Add New</i></a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($teacher as $item)
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->mobile }}</td>
                            <td>
                                <a href="{{ url('/teacher' . '/' . $item->id) }}"><button
                                        class="btn btn-info">View</button></a>
                                <a href="{{ url('/teacher' . '/' . $item->id . '/edit') }}"><button
                                        class="btn btn-primary">Edit</button></a>
                                <form action="{{ route('teacher.destroy', $item->id) }}" method="POST" class="mt-1">
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
