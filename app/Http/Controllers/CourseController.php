<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        // List all courses
        $courses = Course::all();

        // Return view with list of courses
        return view('course.index', compact('courses'));
    }

    public function create(){
        // Display the form to create a new course
        return view('course.create');
    }

    public function store(Request $request){
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'instructor' => 'required|string',
            'courseHead' => 'required|string'
        ]);
    
        // If validation passes, create the entry for the course
        Course::create($validatedData);
    
        // Redirect back to the index page
        return redirect()->route('course.index');
    }    

    public function show($id){
        // Find the course by its ID or throw a 404 error if not found
        $course = Course::findOrFail($id);

        // Return view to show details of the specific course
        return view('course.show', compact('course'));
    }

    public function edit($id){
        // Find the course by its ID or throw a 404 error if not found
        $course = Course::findOrFail($id);

        // Return view to edit the details of the specific course
        return view('course.edit', compact('course'));
    }

    public function update(Request $request, $id){
        // Find the course by its ID and update the course
        Course::find($id)->update($request->all());

        // Redirect back to the index page
        return redirect()->route('course.index');
    }

    public function destroy($id){
        // Find the course by its ID and delete the course
        Course::find($id)->delete();

        // Redirect back to the index page
        return redirect()->route('course.index');
    }
}
