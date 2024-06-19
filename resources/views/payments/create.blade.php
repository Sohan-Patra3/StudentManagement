@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">payments</div>
        <div class="card-body">
            <form action="{{ route('payments.store') }}" method="POST">
                @csrf
                <label for="">Enrollment ID</label>

                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    @foreach ($enrollments as $id => $enroll_no)
                        <option value="{{ $id }}">{{ $enroll_no }}</option>
                    @endforeach
                </select><br>

                <label for="">Paid Date</label>
                <input type="date" name="paid_date" class="form-control"><br>

                <label for="d">Amount</label>
                <input type="number" name="amount" class="form-control"><br>


                <input type="submit" value="Save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
