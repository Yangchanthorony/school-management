<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher_Schedules extends Model
{
    protected $table = "teacher_schedules";
    protected $fillable = [
        "teacher_id",
        "subject_id",
        "study_class_id",
        "student_level_id",
        'study_time_id',
        "day"
    ];


    public function teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }

    public function classroom(){
        return $this->belongsTo(StudyClass::class,'study_class_id');
    }
}