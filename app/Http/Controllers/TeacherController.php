<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\StudentHomework;
use App\Models\User;

use Auth;
use Illuminate\Support\Carbon;
use Image;

class TeacherController extends Controller
{
    public function TeacherAll()
    {
        $teacher = Teacher::with('subject')->latest()->get();
        return view('backend.teacher.teacher_all', compact('teacher'));
    }
    public function TeacherAdd()
    {
        $subject = Subject::latest()->get();
        return view('backend.teacher.teacher_add', compact('subject'));
    }

    public function TeacherStore(Request $request)
    {
        Teacher::insert([
            'title' => $request->title,
            'name' => $request->name,
            'level' => $request->level,
            'subject_id' => $request->subject_id,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'Teacher Inserted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('teacher.all')
            ->with($notification);
    } // End Method

    public function TeacherEdit($id)
    {
        $subject = Subject::latest()->get();

        $teacher = Teacher::findOrFail($id);
        return view('backend.teacher.teacher_edit', compact('teacher', 'subject'));
    } // End method

    public function TeacherUpdate(Request $request)
    {
        $teacher_id = $request->id;
        Teacher::findOrFail($teacher_id)->update([
            'title' => $request->title,
            'name' => $request->name,
            'level' => $request->level,
            'subject_id' => $request->subject_id,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'Teacher Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('teacher.all')
            ->with($notification);
    } // End method

    public function TeacherDelete($id)
    {
        Teacher::findOrFail($id)->delete();
        $notification = [
            'message' => 'Teacher Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->back()
            ->with($notification);
    } // End method
    public function SubmittedHomework(){
        $student_homework = StudentHomework::with('subject','student','teacher')->get();

        return view('backend.teacher.student_homework_all', compact('student_homework'));
    }

}
