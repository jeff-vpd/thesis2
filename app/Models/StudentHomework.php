<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentHomework extends Model
{
    use HasFactory;
    public function subject(){
        return $this->hasOne(Subject::class, 'id', 'subject_id');
    }
    public function teacher(){
        return $this->hasOne(User::class, 'id', 'teacher_id');
    }
    public function student(){
        return $this->hasOne(User::class, 'id', 'student_id');
    }
}
