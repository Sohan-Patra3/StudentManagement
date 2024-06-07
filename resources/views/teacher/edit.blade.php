@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">
            <form action="{{ route('students.update', $students->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" id="id" value="{{ $students->id }}">
                <label for="">Name</label>
                <input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control"><br>
                <label for="">Address</label>
                <input type="text" name="address" id="address" value="{{ $students->address }}"
                    class="form-control"><br>
                <label for="">Mobile</label>
                <input type="text" name="mobile" id="mobile" value="{{ $students->mobile }}" class="form-control"><br>
                <input type="submit" value="update" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
