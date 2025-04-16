<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        // Retrieve all courses
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create() {
        return view('courses.create');
    }

    public function store(Request $request) {
        // Create a new course
        Course::create($request->all());
        return redirect()->route('courses.index');
    }

    public function show(Course $course) {
        return view('courses.show', compact('course'));
    }
}
