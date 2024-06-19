@extends('layout')
@section('content')
    <div class="card-header">
        <h2>payments Management</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus">Add New</i></a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enrollment No</th>
                        <th>Paid Date</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($payments as $item)
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->enrollment->enroll_no }}</td>
                            <td>{{ $item->paid_date }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>
                                <a href="{{ url('/payments' . '/' . $item->id) }}"><button
                                        class="btn btn-info">View</button></a>
                                <a href="{{ url('/payments' . '/' . $item->id . '/edit') }}"><button
                                        class="btn btn-primary">Edit</button></a>
                                <form action="{{ route('payments.destroy', $item->id) }}" method="POST" class="mt-1">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="{{ url('/report/report1/' . $item->id) }}" title="Edit payment"><button
                                        class="btn btn-success mt-1"><i class="fa fa-print"
                                            aria-hidden="true"></i>Print</button></a>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
