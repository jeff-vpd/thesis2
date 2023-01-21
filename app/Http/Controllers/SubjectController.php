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
}
