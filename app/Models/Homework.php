<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subject(){
        return $this->hasOne(Subject::class, 'id', 'subject_id');
    }

    public function teacher(){
        return $this->hasOne(Teacher::class, 'id', 'teacher_id');
    }
    public function user(){
        return $this->hasOne(User::class, 'id', 'teacher_id');
    }
    
}
