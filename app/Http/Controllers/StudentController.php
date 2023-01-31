<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Homework;
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
    public function dashboard(){
        return view('backend.student.student_dashboard');
    }

    public function StudentAdd()
    {
        return view('backend.student.student_add');
    }
    public function sample()
    {
        return view('backend.student.sample');
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
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'Student added Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('student.all')
            ->with($notification);
    } // End method

    public function StudentEdit($id)
    {
        $student = Student::findOrFail($id);
        return view('backend.student.student_edit', compact('student'));
    } // End method

    public function StudentUpdate(Request $request)
    {
        $student_id = $request->id;
        if ($request->file('student_image')) {
            $image = $request->file('student_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            // Ex: 3434343.jpg
            Image::make($image)
                ->resize(200, 200)
                ->save('upload/student/' . $name_gen);

            $save_url = 'upload/student/' . $name_gen;

            Student::findOrFail($student_id)->update([
                'name' => $request->name,
                'grade' => $request->grade,
                'guardian_name' => $request->guardian_name,
                'guardian_mobile_no' => $request->guardian_mobile_no,
                'guardian_email' => $request->guardian_email,
                'address' => $request->address,
                'updated_by' => Auth::user()->id,
                'updated_at' => Carbon::now(),
            ]);

            $notification = [
                'message' => 'Student Update with Image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('student.all')
                ->with($notification);
        } else {
            Student::findOrFail($student_id)->update([
                'name' => $request->name,
                'grade' => $request->grade,
                'guardian_name' => $request->guardian_name,
                'guardian_mobile_no' => $request->guardian_mobile_no,
                'guardian_email' => $request->guardian_email,
                'address' => $request->address,
                'updated_by' => Auth::user()->id,
                'updated_at' => Carbon::now(),
            ]);

            $notification = [
                'message' => 'Student Update without Image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()
                ->route('student.all')
                ->with($notification);
        } // End If else
    } //End Method

    public function StudentDelete($id)
    {
        $students = Student::findOrFail($id);
        $img = $students->student_image;
        unlink($img);

        Student::findOrFail($id)->delete();
        $notification = [
            'message' => 'student Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->back()
            ->with($notification);
    } // End method
     
    public function StudentHomework(){
        return view('backend.student.homework');
    }
//     public function HomeworkStore(Request $request){

//         $image = $request->file('file');
//         $imageName = $image->getClientOriginalName();
//         $image->move(public_path('file'),$imageName);

//         Homework::create([
//             'user_id ' => 1,
//             'title' => 1,
//             'description' => $imageName,
//             'content' => 1,
//             'due_date' => '2023-01-28',
//         ]);
//         return view('backend.student.homework');
//     }
// }

}
