<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\FileUpload;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(DemoController::class)->group(function () {
    Route::get('/about', 'Index')
        ->name('about.page')
         ->middleware('check');
    Route::get('/contact', 'ContactMethod')->name('cotact.page');
});

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
        // Admin All Route
        Route::controller(AdminController::class)->group(function () {
            
            Route::get('/admin/profile', 'Profile')->name('admin.profile');
            Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
            Route::post('/store/profile', 'StoreProfile')->name('store.profile');

            Route::get('/change/password', 'ChangePassword')->name('change.password');
            Route::post('/update/password', 'UpdatePassword')->name('update.password');
        });

        // Teacher All Route
        Route::controller(TeacherController::class)->group(function () {
            Route::get('/teacher/all', 'TeacherAll')->name('teacher.all');
            Route::get('/teacher/add', 'TeacherAdd')->name('teacher.add');
            Route::post('/teacher/store', 'TeacherStore')->name('teacher.store');
            Route::get('/teacher/edit/{id}', 'TeacherEdit')->name('teacher.edit');
            Route::post('/teacher/update', 'TeacherUpdate')->name('teacher.update');
            Route::get('/teacher/delete{id}', 'TeacherDelete')->name('teacher.delete');
        });
    });

// Student All Route
Route::controller(StudentController::class)->group(function () {
    Route::get('/student/all', 'StudentAll')->name('student.all');
    Route::get('/student/add', 'StudentAdd')->name('student.add');
    // Route::get('/student/dashboard', 'dashboard')->name('student.dashboard');
    Route::post('/student/store', 'StudentStore')->name('student.store');

    Route::get('/student/edit/{id}', 'StudentEdit')->name('student.edit');
    Route::post('/student/update', 'StudentUpdate')->name('student.update');
    Route::get('/student/delete{id}', 'StudentDelete')->name('student.delete');
    Route::get('/student/homework{id}', 'StudentHomework')->name('student.homework');
    Route::post('/student/homework/store', 'StudentHomeworkStore')->name('student.homework.store');
});

Route::controller(FileUpload::class)->group(function () {
    // Route::post('/homework/store', 'fileUpload')->name('homework.store');
});

Route::controller(SubjectController::class)->group(function () {
    Route::get('/subject/all', 'SubjectAll')->name('subject.all');
    Route::get('/subject/add', 'SubjectAdd')->name('subject.add');
    Route::post('/subject/store', 'subjectStore')->name('subject.store');
    Route::get('/subject/edit/{id}', 'SubjectEdit')->name('subject.edit');
    Route::post('/subject/update', 'SubjectUpdate')->name('subject.update');
    Route::get('/subject/delete{id}', 'SubjectDelete')->name('subject.delete');
});

Route::controller(HomeworkController::class)->group(function () {
    Route::get('/homework/all', 'HomeworkAll')->name('homework.all');
    Route::get('/homework/add', 'HomeworkAdd')->name('homework.add');
    Route::post('/homework/stores', 'HomeworkStore')->name('homework.stores');
    Route::get('/homework/submitted', 'HomeworkSubmitted')->name('homework.submitted');
    Route::get('/homework/review{id}', 'HomeworkReview')->name('homework.review');
    Route::post('/homework/review/update', 'HomeworkReviewUpdate')->name('homework.review.update');


});
Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');


Route::get('/dashboard', function () {
    return view('admin.index');
})
    ->middleware(['auth'])
    ->name('dashboard');

require __DIR__ . '/auth.php';