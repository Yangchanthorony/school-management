<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherHours extends Model
{
    protected $fillable = [
        'teacher_id',
        'spent_hours'
    ];
}