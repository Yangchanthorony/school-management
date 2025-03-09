<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal.dashboard');
});

//Admin Auth
Route::get('/admin',function(){
    return view('principal.auth.login');
});
Route::get('/admin/forgot',function(){
    return view('principal.auth.send_email');
});
Route::get('/admin/forgot/verify',function(){
    return view('principal.auth.code_verify');
});
Route::get('/admin/reset/password',function(){
    return view('principal.auth.new_password');
});


//Subject Routers
Route::get('/subject',function(){
    return view('principal.subjects.list');
});
Route::get('/subject/create',function(){
    return view('principal.subjects.create');
});
Route::get('/subject/edit',function(){
    return view('principal.subjects.edit');
});
Route::get('/subject/view',function(){
    return view('principal.subjects.view');
});

//Teacher Auth
Route::get('/teachers/login',function(){
    return view('teachers.auth.login');
});

Route::get('/teacehrs/register',function(){
    return view('teachers.auth.register');
});


//Teachers Routers
Route::get('/teacher',function(){
    return view('principal.teachers.list');
});
Route::get('/teacher/create',function(){
    return view('principal.teachers.create');
});
Route::get('/teacher/edit',function(){
    return view('principal.teachers.edit');
});

Route::get('/teacher/view',function(){
    return view('principal.teachers.view');
});



//Routers classes
Route::get('/class',function(){
    return view('principal.classes.list');
});
Route::get('/class/create',function(){
    return view('principal.classes.create');
});
Route::get('/class/edit',function(){
    return view('principal.classes.edit');
});

Route::get('/class/view',function(){
    return view('principal.classes.view');
});



//Teachers Routers
Route::get('/student',function(){
    return view('principal.students.list');
});
Route::get('/student/create',function(){
    return view('principal.students.create');
});
Route::get('/student/edit',function(){
    return view('principal.students.edit');
});

Route::get('/student/view',function(){
    return view('principal.students.view');
});

// Profle
Route::get('/profile',function(){
    return view('principal.profile.profile');
});

//Setting 
Route::get('/setting',function(){
    return view('principal.setting.setting');
});


Route::get('/login',function(){
    return view('principal.login');
});

//Message contact routers
Route::get('/contact',function(){
    return view('principal.contacts.contact');
});



//---------------Teacher Router start--------------------//
Route::get('/teachers/dashboard',function(){
    return view('teachers.dashboard');
});

//Guardian Router
Route::get('/teachers/parent',function(){
    return view('teachers.student_parent.view');
});
Route::get('/teachers/view/class',function(){
    return view('teachers.classes.view');
});
Route::get('/teachers/parent/create',function(){
    return view('teachers.student_parent.create');
});
Route::get('/teacher/parent/edit',function(){
    return view('principal.guardians.edit');
});
Route::get('/teachers/student/ranking',function(){
    return view('teachers.classes.student_ranking');
});
Route::get('/teachers/attendance',function(){
    return view('teachers.classes.attendance');
});
Route::get('/teachers/student/score',function(){
    return view('teachers.classes.student_score');
});

//---------------Teacher Router end--------------------//