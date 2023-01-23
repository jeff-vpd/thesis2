<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;




Route::get('/', function () {
    return view('welcome');
});


Route::controller(DemoController::class)->group(function () {
    Route::get('/about', 'Index')->name('about.page')->middleware('check');
    Route::get('/contact', 'ContactMethod')->name('cotact.page');
});


 // Admin All Route 
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');

    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
     
});

 // Student All Route
 Route::controller(StudentController::class)->group(function () {
    Route::get('/student/all', 'StudentAll')->name('student.all');
    Route::get('/student/add', 'StudentAdd')->name('student.add');
    Route::post('/student/store', 'StudentStore')->name('student.store');
    Route::get('/student/edit/{id}', 'StudentEdit')->name('student.edit');
    Route::post('/student/update', 'StudentUpdate')->name('student.update');
    Route::get('/student/delete{id}', 'StudentDelete')->name('student.delete');
});

Route::controller(SubjectController::class)->group(function () {
    Route::get('/subject/all', 'SubjectAll')->name('subject.all');
});

Route::controller(SubjectController::class)->group(function () {
    Route::get('/subject/all', 'SubjectAll')->name('subject.all');
});



 





Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Route::get('/contact', function () {
//     return view('contact');
// });
