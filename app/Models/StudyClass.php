<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'class_level_id', // Added this field
        'homeroom_teacher',
        'desk',
        'fan',
        'whiteboard',
        'status',
        'note'
    ];

    

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_classes');
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class,'homeroom_teacher');
    }

    public function level(){
        return $this->belongsTo(StudentLevel::class,'class_level_id');
    }


}