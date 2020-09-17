<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $updateLessonRequest)
    {
        $lesson = Lesson::create([
            "student_id" => $updateLessonRequest->student,
            "teach_id" => $updateLessonRequest->teacher,
            "lesson_date" => $updateLessonRequest->date,
            "subject" => $updateLessonRequest->subject,
            "description" => $updateLessonRequest->description
        ]);
        return response([
            "message" => "Lesson created successfully"
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $updateLessonRequest, Lesson $lesson)
    {
        $lesson->update([
            "student_id" => $updateLessonRequest->teacher,
            "teacher_id" => $updateLessonRequest->teacher,
            "lesson_date" => $updateLessonRequest->date,
            "subject" => $updateLessonRequest->subject,
            "description" => $updateLessonRequest->description
        ]);
        return response([
            "message" => "Lesson created successfully"
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
