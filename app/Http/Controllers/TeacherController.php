<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use illuminate\View\View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $teacher = Teacher::all();
        return view('teacher.index')->with('teacher' , $teacher);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('teacher.create');
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


                Teacher::create($validatedData);


                return redirect('/teacher')->with('flash_message', 'Teacher added');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::find($id);
        return view('teacher.show')->with('teacher' , $teacher);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers = Teacher::find($id);
        return view('teacher.edit')->with('teachers' , $teachers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teachers = Teacher::find($id);
        $input = $request->all();
        $teachers->update($input);
        return redirect('/teacher');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::destroy($id);
        return redirect('/teacher');
    }
}
