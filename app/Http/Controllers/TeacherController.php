<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Homework;
use App\Models\StudentHomework;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;

use Illuminate\Support\Carbon;
use Image;

class TeacherController extends Controller
{
    public function TeacherAll()
    {
        $user = User::where('role', 1)->get();
        return view('backend.teacher.teacher_all', compact('user'));
    }
    public function TeacherAdd()
    {
        $subject = Subject::latest()->get();
        return view('backend.teacher.teacher_add', compact('subject'));
    }

    public function TeacherStore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'title' => $request->title,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level,
            'role' => 1,
        ]);

        $notification = [
            'message' => 'Teacher Updated Successfully',
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
}
