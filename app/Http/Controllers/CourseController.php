<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Course/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required'],
            'price' => ['required'],
            'summary' => ['required'],
            'slug' => ['nullable'],
            'image' => ['nullable'],
            'video' => ['nullable'],
            'body' => ['nullable'],
        ]);


        $course = Course::create($validated);


        $course->save();

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();

        return Inertia::render('Admin/Course/Show', compact('course'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
