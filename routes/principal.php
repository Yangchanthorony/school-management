<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\StudyClassController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\TeacherScheduleController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware('guest.admin')->group(function(){
        Route::get('/',[AdminAuthController::class,'loginShow'])->name('login.show');
        Route::post('/login',[AdminAuthController::class,'loginProcess'])->name('login.process');
        Route::get('/send',[AdminAuthController::class,'sendEamil'])->name('send.email.show');
        Route::post('/send/process',[AdminAuthController::class,'sendEmailProcess'])->name('send.email.process');
        Route::get('/verify/{token}',[AdminAuthController::class,'codeVerify'])->name('code.veryfi.show');
        Route::post('/verify/process',[AdminAuthController::class,'codeVerifyProcess'])->name('code.veryfi.process');
        Route::get('/newpass/{token}',[AdminAuthController::class,'resetPasswordShow'])->name('reset.password.show');
        Route::post('/newpass/process',[AdminAuthController::class,'resetPasswordProcess'])->name('reset.password.process');
    });

    Route::middleware('auth.admin')->group(function(){
        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');
        Route::get('/logout',[AdminAuthController::class,'logout'])->name('logout');

        //subject Router
        Route::get('subject',[SubjectController::class,'index'])->name('subject.list');
        Route::get('subject/create',[SubjectController::class,'create'])->name('subject.create');
        Route::get('subject/edit/{id}',[SubjectController::class,'edit'])->name('subject.edit');
        Route::post('/subject',[SubjectController::class,'store'])->name('subject.store');
        Route::put('subject/{id}',[SubjectController::class,'update'])->name('subject.update');
        Route::get('subject/{id}',[SubjectController::class,'destroy'])->name('subject.destroy');

        //Teacher Router
        Route::prefix('teacher')->group(function () {
            Route::get('/', [TeacherController::class, 'index'])->name('teachers.index'); // List all teachers
            Route::get('/create', [TeacherController::class, 'create'])->name('teachers.create'); // Show form to create a new teacher
            Route::post('/', [TeacherController::class, 'store'])->name('teachers.store'); // Store new teacher
            Route::get('/{id}', [TeacherController::class, 'edit'])->name('teachers.edit'); // Show form to edit a teacher
            Route::put('/{id}', [TeacherController::class, 'update'])->name('teachers.update'); // Update a teacher
            Route::get('delete/{id}', [TeacherController::class, 'destroy'])->name('teachers.destroy'); // Delete a teacher
        });

        //class Router
        Route::prefix('class')->group(function () {
            Route::get('/', [StudyClassController::class, 'index'])->name('class.index'); // List all teachers
            Route::get('/create', [StudyClassController::class, 'create'])->name('class.create'); // Show form to create a new teacher
            Route::post('/', [StudyClassController::class, 'store'])->name('class.store'); // Store new teacher
            Route::get('/{id}', [StudyClassController::class, 'edit'])->name('class.edit'); // Show form to edit a teacher
            Route::put('/{id}', [StudyClassController::class, 'update'])->name('class.update'); // Update a teacher
            Route::get('delete/{id}', [StudyClassController::class, 'destroy'])->name('class.destroy'); // Delete a teacher
            Route::get('/view/{id}',[StudyClassController::class,'view'])->name('class.view');
            
        });

          //Schedule Routes
        Route::get('/setting',[TeacherScheduleController::class,'index']);
        Route::get('/schedule/list',[TeacherScheduleController::class,'list']);
        Route::post('/schedule/store',[TeacherScheduleController::class,'store'])->name('schedule.store');

        
        Route::get('/schedule/create',[TeacherScheduleController::class,'create'])->name('schedule.create');
        Route::get('/get-subjects/{teacherId}', [TeacherScheduleController::class, 'getSubjects']);

    });

    
    
});