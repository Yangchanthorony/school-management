<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable = [
        'full_name',
        'latin_name',
        'gender',
        'marital_status',
        'dob',
        'national_id',
        'specialization',
        'degree',
        'university',
        'email',
        'phone',
        'password',
        'hire_date',
        'created_by',
        'note',
        'email_verified_at',
    ];

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class,'teacher_subjects');
    }

    public function levels()
    {
        return $this->belongsToMany(StudentLevel::class, 'teacher_subjects', 'teacher_id', 'student_level_id');
    }
    
}