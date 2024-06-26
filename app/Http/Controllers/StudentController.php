<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $students = Student::all();
        return view('students.index')->with('students' , $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
                // Validate the request data
                $validatedData = $request->validate([
                    'name' => 'required|string|max:255',
                    'address' => 'required',
                    'mobile' => 'required',
                ]);


                Student::create($validatedData);


                return redirect('/students')->with('flash_message', 'Student added');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Student::find($id);
        return view('students.show')->with('students' , $students);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students = Student::find($id);
        return view('students.edit')->with('students' , $students);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $students = Student::find($id);
        $input = $request->all();
        $students->update($input);
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::destroy($id);
        return redirect('/students');
    }
}
