<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherClass extends Model
{
    use HasFactory;

    protected $table = "teacher_classes";

    protected $fillable = [
        'teacher_id',
        'study_class_id',
    ];

    public function teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
}