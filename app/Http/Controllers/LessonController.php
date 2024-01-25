<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Course;

class LessonController extends Controller
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
    public function create(string $kurzu)
    {
        $course = Course::find($kurzu);
        $lastOrder  = Lesson::max('order');
        $lastLesson = $lastOrder !== null ? $lastOrder : 0;

        return Inertia::render('Admin/Course/Lesson/Create', compact('course', 'lastLesson'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'course_id' => 'required',
            'order' => 'required',
            'summary' => 'nullable',
            'body' => 'nullable',
            'slug' => 'required',
        ]);

        $lesson = Lesson::create($validatedData);


        $lesson->save();

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
