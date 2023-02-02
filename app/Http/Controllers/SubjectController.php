<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Subject;
use Auth;
use Illuminate\Support\Carbon;
use Image;


class SubjectController extends Controller
{
    public function SubjectAll(){
        $subject = Subject::latest()->get();
        return view('backend.subject.subject_all', compact('subject'));
    }

    public function SubjectAdd()
    {
        return view('backend.subject.subject_add');
    }

    public function SubjectStore(Request $request)
    {
        Subject::insert([
            'name' => $request->name,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'max_capacity' => $request->max_capacity,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'Subject Inserted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('subject.all')
            ->with($notification);
    } // End Method

    public function SubjectEdit($id){
        $subject =  Subject::findOrFail($id);
        return view('backend.subject.subject_edit', compact('subject'));
    } // End method

    public function SubjectUpdate(Request $request)
    {
        $subject_id = $request->id;
        Subject::findOrFail($subject_id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'max_capacity' => $request->max_capacity,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'Subject Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->route('subject.all')
            ->with($notification);
    } // End method
    
    public function SubjectDelete($id)
    {
        Subject::findOrFail($id)->delete();
        $notification = [
            'message' => 'Subject Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()
            ->back()
            ->with($notification);
    } // End method
}
