@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">
            <form action="{{ route('payments.update', $payments->id) }}" method="POST">
                @csrf
                @method('PATCH')
                {{-- <input type="hidden" id="id" value="{{ $payments->id }}">
                <label for="">Enrollment No</label>
                <input type="text" name="enrollment_id" id="name" value="{{ $enrollments->enroll_no }}"
                    class="form-control"><br> --}}
                <label for="">Enrollment ID</label>

                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    @foreach ($enrollments as $id => $enroll_no)
                        <option value="{{ $id }}">{{ $enroll_no }}</option>
                    @endforeach
                </select><br>
                <label for="">Paid Date</label>
                <input type="date" name="paid_date" id="" value="{{ $payments->paid_date }}"
                    class="form-control"><br>
                <label for="">Amount</label>
                <input type="number" name="amount" id="" value="{{ $payments->amount }}"
                    class="form-control"><br>

                <input type="submit" value="update" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
