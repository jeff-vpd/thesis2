<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homework;
use App\Models\Subject;
use App\Models\Teacher;

use Auth;
use Illuminate\Support\Carbon;

class HomeworkController extends Controller
{
    public function HomeworkAll()
    {
        $homework = Homework::with('subject', 'teacher')->latest()->get();
        return view('backend.homework.homework_all', compact('homework'));
    }

    public function HomeworkAdd()
    {
        $subject = Subject::latest()->get();
        $teacher = Teacher::latest()->get();
        return view('backend.homework.homework_add', compact('subject', 'teacher'));
    }

    public function HomeworkStore(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf,png,jpg,doc,docx|max:2048'
            ]);
            if($request->file()) {
                $fileName = time().'_'.$request->file->getClientOriginalName();
                $filePath = $request->file('file')->storeAs('file', $fileName, 'public');
                $file_path = '/storage/' . $filePath;

            }
            Homework::insert([
                'subject_id' => $request->subject_id,
                'teacher_id' => $request->teacher_id,
                'video_link' => $request->video_link,
                'category' => $request->category,
                'description' => $request->description,
                'file'        => $fileName,
                'created_by' => Auth::user()->id,
                'created_at' => Carbon::now(),

            ]);

            $notification = [
                'message' => 'Homework added Successfully',
                'alert-type' => 'success',
            ];
    
            return redirect()
                ->route('homework.all')
                ->with($notification);
            
    }

}
