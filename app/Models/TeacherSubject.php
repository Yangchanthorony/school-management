<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherSubject extends Model
{
    
    protected $table = 'teacher_subjects';
        protected $fillable = [
            'teacher_id',
            'student_level_id',
            'subject_id',
        ];

    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
    public function levels(){
        return $this->belongsTo(StudentLevel::class,'student_level_id');
    }
    
}