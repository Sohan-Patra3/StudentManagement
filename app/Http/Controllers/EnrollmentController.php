<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Student;
use illuminate\View\View;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index')->with('enrollments', $enrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = Student::pluck('name', 'id');
        $batch = Batch::pluck('name', 'id'); // Adjust if necessary, but 'id' is typical
        return view('enrollments.create', compact('student', 'batch'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'enroll_no'=>'required',
            'batch_id'=>'required',
            'student_id'=>'required',
            'join_date'=>'required',
            'fee'=>'required'
        ]);

        Enrollment::create($validatedData);

        return redirect('/enrollments');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollments=Enrollment::find($id);
        return view('enrollments.show')->with('enrollments' , $enrollments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollments=Enrollment::find($id);
        return view('enrollments.edit')->with('enrollments' , $enrollments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enrollments=Enrollment::find($id);
        $input=$request->all();
        $enrollments->update($input);
        return redirect('/enrollments');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::destroy($id);
        return redirect('/enrollments');
    }
}
