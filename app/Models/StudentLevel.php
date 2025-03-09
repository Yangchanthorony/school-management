<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentLevel extends Model
{
    protected $table = 'student_levels';
    protected $fillable = [
        'name', 
    ];
}
