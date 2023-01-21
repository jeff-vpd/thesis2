<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use Auth;
use Illuminate\Support\Carbon;
use Image;


class StudentController extends Controller
{
    public function StudentAll()
    {
        $student = Student::latest()->get();
        return view('backend.student.student_all', compact('student'));
    }

    public function StudentAdd()
    {
        return view('backend.student.student_add');
    }

    public function StudentStore(Request $request)
    {
        $image = $request->file('student_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        // Ex: 3434343.jpg
        Image::make($image)
            ->resize(200, 200)
            ->save('upload/student/' . $name_gen);

        $save_url = 'upload/student/' . $name_gen;

        Student::insert([
            'name' => $request->name,
            'grade' => $request->grade,
            'guardian_name' => $request->guardian_name,
            'guardian_mobile_no' => $request->guardian_mobile_no,
            'guardian_email' => $request->guardian_email,
            'address' => $request->address,
            'student_image' => $save_url,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'Student added Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('student.all')
            ->with($notification);
    } // End method

}
