<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homework;
use Auth;
use Illuminate\Support\Carbon;

class HomeworkController extends Controller
{
    public function HomeworkAll()
    {
        $homework = Homework::latest()->get();
        return view('backend.homework.homework_all', compact('homework'));
    }

}
